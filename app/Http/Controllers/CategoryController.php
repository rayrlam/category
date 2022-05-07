<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CategoryRepository;
use App\Helpers\BreadcrumbHelper;

class CategoryController extends Controller
{
    public function welcome()
    {
        $list = CategoryRepository::list();
        $b8 = BreadcrumbHelper::breadcrumb(8);
        $b5 = BreadcrumbHelper::breadcrumb(5, "/");
        return view('welcome', ['breadcrumbs'=>[$b8,$b5], 'list'=>$list]);
    }

    public function categories($id)
    {
        $categories = CategoryRepository::categories($id >= 0 ? $id : 0);
        return view('categories', compact(['categories']));
    }

    public function breadcrumb()
    {
        return view('breadcrumb');
    }

    public function breadcrumbs(Request $request)
    {
        $id = (int) $request->input('id');
        $sep = $request->input('sep') ?: ">";
        $withUrl = $request->input('show') ? true : false;
        $breadcrumbs = BreadcrumbHelper::breadcrumb($id, $sep, $withUrl);
        return view('breadcrumbs', compact(['breadcrumbs']));
    }
}