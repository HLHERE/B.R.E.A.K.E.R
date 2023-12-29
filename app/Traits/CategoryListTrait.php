<?php

// Buat file CategoryListTrait.php di dalam direktori app/Traits
namespace App\Traits;

use App\Services\CategoryService;
use Illuminate\Support\Facades\View;

trait CategoryListTrait
{
  protected function shareCategoryList()
  {
    $categoryService = app(CategoryService::class);
    $categoryList = $categoryService->getCategoryList();
    View::share('categoryList', $categoryList);
  }
}
