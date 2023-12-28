<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
  public function getCategoryList()
  {
    $categoryList = Category::withCount('posts')->get();

    // Tambahkan 10 ke setiap nilai posts_count
    $categoryList->transform(function ($category) {
      $category->posts_count += 10;
      return $category;
    });

    return $categoryList;
  }
}
