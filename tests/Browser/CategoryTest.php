<?php
namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CategoryTest extends DuskTestCase
{
    public function testWelcomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Developer Task – Category Breadcrumb');
        });
    }

    public function testCategoriesPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/categories/0')
                    ->assertSee('Categories')
                    ->assertSee('Clothing')
                    ->assertSee('Accessories')
                    ->assertSee('Watches');
        });
    }

    public function testBreadcrumbPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/breadcrumb')
                    ->assertSee('Breadcrumb')
                    ->assertSee('Category Id')
                    ->assertSee('Separator')
                    ->assertSee('Create');
        });
    }

    public function testBreadcrumbIdEqualEight()
    {   
        $input = [8, ">"];
        $this->browse(function ($browser) use ($input) {
            $browser->visit('/breadcrumb')
                    ->type('id', $input[0])
                    ->type('sep', $input[1])
                    ->press('Create')
                    ->assertPathIs('/breadcrumbs')
                    ->assertSeeLink('Clothing')
                    ->assertSeeLink('Men')
                    ->assertSeeLink('T-Shirts')
                    ->assertSee('>');
        });
    }

    public function testBreadcrumbIdEqualFive()
    {   
        $input = [5, "/"];

        $this->browse(function ($browser) use ($input) {
            $browser->visit('/breadcrumb')
                    ->type('id', $input[0])
                    ->type('sep', $input[1])
                    ->press('Create')
                    ->assertPathIs('/breadcrumbs')
                    ->assertSee('/')
                    ->assertSeeLink('Clothing')
                    ->assertSeeLink('Men');
        });
    }
}