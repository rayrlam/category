<?php
namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    public function getCategory(int $id): array
    {
        $category = Category::findOrFail($id);
        return ['id'=>$category->id, 'parent_id'=>$category->parent_id, 'name'=>$category->name];
    }

    public function categories($id): object
    {
        return Category::where('parent_id', $id)->get();
    }

    public function list(): object
    {
        return Category::all();
    }
} 