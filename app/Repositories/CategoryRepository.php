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
} 