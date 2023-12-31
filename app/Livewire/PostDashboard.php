<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostDashboard extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        return view('livewire.post-dashboard', [
            'posts' => Post::where('title', 'like', '%' . $this->search . '%')->paginate(7),
        ]);
    }

    public function searchPosts()
    {
        $this->resetPage();
        $this->dispatchBrowserEvent('refreshLivewire');
    }

    public function updateSearch()
    {
        $this->resetPage();
    }

    protected $listeners = ['refreshLivewire' => '$refresh'];

    // Other methods...
}
