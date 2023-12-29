<?php

namespace App\Services;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Repositories\GuardianApiRepository;
use App\Repositories\MergeDataRepository;
use Illuminate\Pagination\LengthAwarePaginator;


class PostsService
{

  private $apiService, $localService;

  public function __construct(GuardianApiRepository $apiService, MergeDataRepository $localService)
  {
    $this->apiService = $apiService;
    $this->localService = $localService;
  }

  public function postsService()
  {
    $title = 'All Post';
    $search = '';

    if (request('category')) {
      $category = Category::firstWhere('slug', request('category'));
      $title = ' in ' . $category->name;
      $search = $category->name;
    }

    if (request('author')) {
      $author = User::firstWhere('username', request('author'));
      $title = ' by ' . $author->name;
      $search = $author->name;
    }

    $getData = Post::latest()->filter(request(['search', 'category', 'author']))
      ->get();

    $searchResult = $this->apiService->getNews(10, $search, '', '');

    $mergedPosts = $this->localService->mergeProcessedData($getData, $searchResult);

    $totalItems = count($mergedPosts);
    $perPage = 9;

    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $startIndex = ($currentPage - 1) * $perPage;
    $items = array_slice($mergedPosts->all(), $startIndex, $perPage);

    $posts = new LengthAwarePaginator($items, $totalItems, $perPage, $currentPage, [
      'path' => LengthAwarePaginator::resolveCurrentPath(),
      'pageName' => 'page',
    ]);

    return (object)[
      'posts' => $posts,
      'title' => $title
    ];
  }
}
