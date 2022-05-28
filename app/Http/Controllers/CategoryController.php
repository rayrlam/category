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

    public function category(Request $request, $id){
        return $this->categories($request, $id);
    }

    public function categories(Request $request, $id = 0)
    {
        $id = $id === 0 ? 0 : $id;
        if($request->isMethod('post')) {
            $id = $request->input('id');
        }
        $categories = CategoryRepository::categories($id);
        $pid = CategoryRepository::pid();
        return view('categories', compact(['categories', 'id', 'pid']));
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