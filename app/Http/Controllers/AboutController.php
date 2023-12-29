<?php

namespace App\Http\Controllers;

use App\Traits\CategoryListTrait;

class AboutController extends Controller
{
    use CategoryListTrait;

    public function index()
    {
        $this->shareCategoryList();

        return view('about');
    }
}
