<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    public function test()
    {
        $arr = CategoryRepository::getCategory(rand(1,8));
        dd($arr);
    }
}
