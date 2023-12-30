<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use iluminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tampilButton = true;
        $showButton = true;
        $printButton = true;

        return view('dashboard.posts.index',[
            // 'posts' => Post::where('id' ,auth()->user()->id)->get()
            'posts' => Post::all(),
            'tampilButton' => $tampilButton,
            'showButton' => $showButton,
            'printButton' => $printButton
        ]);
    }


    public function print() {
        return view('dashboard.posts.print', [
            'posts' => Post::all()
        ]); 
    }


   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $showButton = true;
        return view('dashboard.posts.create' , [
            'categories' => Category::all(),
            'showButton' => $showButton,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'postImg' => 'image|file|max:12582912', // 12 MB in bytes
            'body' =>'required',
        ]);
    
        $validatedData['user_id'] = auth()->user()->id;
        
        if($request->file('postImg')) {
            $validatedData['postImg'] = $request->file('postImg')->store('post-images');
        }
        // Hapus baris berikut untuk menghilangkan 'excerpt' dari data yang dikirimkan
        // $validatedData['excerpt'] = Str::limit($request->body, 200);
    
        // Simpan data ke model atau tempat penyimpanan yang sesuai
        Post::create($validatedData);

    
        // Redirect atau berikan respons sesuai kebutuhan aplikasi Anda
        return redirect('dashboard/posts')->with('success', 'news has been added'); // Gantilah 'nama.route' sesuai dengan route yang sesuai.
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $showButton = true;
        return view ('dashboard.posts.show' , [
            'post' => $post,
            'showButton' => $showButton,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit' , [
            'post' => $post,
            'categories'=> Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'postImg' => 'image|file|max:12582912', // 12 MB in bytes
            'body' =>'required',
        ];

        

        if($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);   

        if ($request->file('postImg')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['postImg'] = $request->file('postImg')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Post::where('id', $post->id)->update($validatedData);

        return redirect('dashboard/posts')->with('success', 'news has been edit'); // Gantilah 'nama.route' sesuai dengan route yang sesuai.

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
       if($post->postImg) {
            Storage::delete($post->postImg);
       }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success' , 'news has been deleted!');
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Post::class,'slug' , $request->title );
        return response()->json(['slug' => $slug]);
 }
 public function search(Request $request) {
    if($request->ajax()){
        $data = Post::where('id', 'like', '%' . $request->search . '%')
            ->orWhere('title', 'like', '%' . $request->search . '%')
            ->orWhere('category', 'like', '%' . $request->search . '%')->get();

        $output = '';
        $counter = 1;

        if(count($data) > 0){
            foreach($data as $row){
                $output .= '
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 dark:text-white">
                        ' . $counter++ . '
                    </td>
                    <td class="px-6 py-4">
                        '.$row->title.'
                    </td>
                    <td class="px-6 py-4">
                        '.$row->category->name.'
                    </td>
                    <td class="px-6 py-4 text-center">
                        <a href="/dashboard/posts/'.$row->slug.'/edit">
                            <button type="button" class="text-white border-yellow-200 bg-yellow-300 hover:bg-yellow-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <!-- Font Awesome icon -->
                                    <path fill="#ffffff" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"/>
                                </svg>
                                <span class="sr-only"></span>
                            </button>
                        </a>
                        <form class="inline" action="/dashboard/posts/'.$row->slug.'" method="POST">
                            '.csrf_field().'
                            '.method_field('delete').'
                            <button onclick="return confirm(\'Are you sure want to delete this?\')" type="submit" class="text-white border-red-700 bg-red-600 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <!-- Font Awesome icon -->
                                    <path fill="#ffffff" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                </svg>
                                <span class="sr-only"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                ';
                    }
                } else {
                    $output .= '<tr><td colspan="4" class="text-center py-4" id="no_search_result">Tidak ada hasil pencarian.</td></tr>';
                }

                return $output;
            }
        }
    }


