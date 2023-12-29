<?php

namespace App\Services;

use App\Models\Post;
use App\Repositories\GuardianApiRepository;
use App\Repositories\MergeDataRepository;

class PostService
{
  private array $meterAPI = ['relevance', 'published', 'newest', 'first-publication'];

  private $apiService, $localService;

  public function __construct(GuardianApiRepository $apiService, MergeDataRepository $localService)
  {
    $this->apiService = $apiService;
    $this->localService = $localService;
  }

  public function getPopularData($local, $Api)
  {
    $popular = Post::latest()->filter(request(['search', 'category', 'author']))
      ->paginate($local)->withQueryString();
    $popularContentAPI = $this->apiService->getNews($Api, '', $this->meterAPI[0], $this->meterAPI[1]);

    $processedPopular = $this->localService->mergeProcessedData($popular, $popularContentAPI);
    return $processedPopular;
  }

  // Fungsi ambil data Random
  public function getPostRandom($local, $Api)
  {
    $posts = Post::with(['author', 'category'])->latest()->take($local)->get();
    $randomContentAPI = $this->apiService->getNews($Api, '', $this->meterAPI[2], $this->meterAPI[3]);

    $processedPosts = $this->localService->mergeProcessedData($posts, $randomContentAPI);

    return $processedPosts;
  }
}
