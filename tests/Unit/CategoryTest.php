<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Helpers\BreadcrumbHelper;
use App\Repositories\CategoryRepository;

class CategoryTest extends TestCase
{   
    public function test_welcome_page_can_be_rendered()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_breadcrumb_page_can_be_rendered()
    {
        $response = $this->get('/breadcrumb');
        $response->assertStatus(200);
    }
    
    public function test_categories_page_can_be_rendered()
    {
        $response = $this->get('/categories');
        $response->assertStatus(200);
    }

    public function test_category_page_can_be_rendered()
    {
        $response = $this->get('/category/0');
        $response->assertStatus(200);
    }

    public function test_welcome_view_with_data()
    {
        $list = CategoryRepository::list();
        $b8 = BreadcrumbHelper::breadcrumb(8);
        $b5 = BreadcrumbHelper::breadcrumb(5, "/");

        $view = $this->view('welcome', ['breadcrumbs'=>[$b8,$b5], 'list'=>$list]);
        $view->assertSee('Welcome');
        $view->assertSee('Clothing');
        $view->assertSee('Men');
        $view->assertSee('T-Shirts');
    }

    public function test_breadcrumbs_view_with_data()
    {
        $id = 8;
        $sep = ">";
        $withUrl = true;
        $breadcrumbs = BreadcrumbHelper::breadcrumb($id, $sep, $withUrl);

        $view = $this->view('breadcrumbs', compact(['breadcrumbs']));
        $view->assertSee('Clothing');
        $view->assertSee('Men');
        $view->assertSee('T-Shirts');
    }

    public function test_categories_post_view_with_data()
    {
        $id = 0;
        $categories = CategoryRepository::categories($id);
        $pid = CategoryRepository::pid();

        $view = $this->view('categories', compact(['categories', 'id', 'pid']));;
        $view->assertSee('Clothing');
        $view->assertSee('Accessories');
        $view->assertSee('Watches');
    }

    public function test_getCategory_5()
    {
        $this->assertEquals(CategoryRepository::getCategory(5)['name'] , "Men");
    }

    public function test_getCategory_8()
    {
        $this->assertEquals(CategoryRepository::getCategory(8)['name'] , "T-Shirts");
    }

    public function test_breadcrumb_5()
    {
        $breadcrumb = BreadcrumbHelper::breadcrumb(5);
        foreach(["Clothing","Men"] as  $k=>$v){
            $this->assertEquals($breadcrumb[$k]['name'],$v);
        }
    }

    public function test_breadcrumb_8()
    {
        $breadcrumb = BreadcrumbHelper::breadcrumb(8);
        foreach(["Clothing","Men","T-Shirts"] as  $k=>$v){
            $this->assertEquals($breadcrumb[$k]['name'],$v);
        }
    }
}