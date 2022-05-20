<?php
namespace Tests\Unit;

use Tests\TestCase;
use App\Helpers\BreadcrumbHelper;
use App\Repositories\CategoryRepository;

class CategoryTest extends TestCase
{
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
