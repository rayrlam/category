<x-category-layout>
    <x-slot name="header">
        <div class="flex justify-center sm:justify-start sm:pt-0">
            <h1 class="">
                {{ __('Developer Task – Category breadcrumb') }}    
            </h1>
        </div>
    </x-slot>

    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            
        <div class="ml-4 text-xl mt-4 font-semibold text-gray-900 dark:text-white">
            <p>
            Imagine we have a database table of category information as per the below. This shows categories in 
a hierarchical structure indicated by a parent_id. I.e. a category with a parent_id of 1 is a subcategory of Clothing, whereas a category with a parent_id of 5 is a sub-category of Men. Any 
category with a sub-category of 0 is a top level category.
            </p>
        </div>

        <div class="mt-4">
            <table id="items" style="margin:auto;width:97%">
                <tr>
                    <th>id</th>
                    <th>parent_id</th>
                    <th>name</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>0</td>
                    <td>Clothing</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>0</td>
                    <td>Accessories</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>0</td>
                    <td>Watches</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>1</td>
                    <td>Women</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>1</td>
                    <td>Men</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>4</td>
                    <td>Tops</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>4</td>
                    <td>Trousers</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>5</td>
                    <td>T-Shirts</td>
                </tr>
            </table>
        </div>
        
        <div class="mt-4">
            <div class="ml-4 text-xl mt-4 font-semibold text-gray-900 dark:text-white">
                <p> 
                    We would like you to create a function that produces a category breadcrumb. This function should 
                    use parameters for the required category id and the separator.
                </p>
                <p>
                    For example. If I supplied 8 as the category id and ‘>’ as the separator I would expect the result to be:
                </p>
                <p>
                    Clothing > Men > T-shirts
                </p>
                <p>
                    If I supplied 5 as the category id and ‘/’ as the separator I would expect the result to be:
                </p>
                <p>
                    Clothing / Men
                </p>
                <p>
                    For the purposes of this exercise assume you have a function called getCategory($id) available to 
                    supply you with an array of the category values when the category id is passed in.
                </p>

                <p>
                    For example: getCategory(8) would return
                </p>
                <p>
<pre>
Array(
    'id' => 8,
    'parent_id' => 5,
    'name' => 'T-Shirts'
)
</pre>        
                </p>
            </div>
        </div>

        <div class="mt-4">
            <hr style=" border: 2px solid #04aa6d;" />
        </div>
        
        <div class="ml-4 text-xl mt-4 font-semibold text-gray-900 dark:text-white">
            <h2 class="text-xl">Setup Information</h2>
        </div>

        <div class="ml-4 text-xl mt-4 font-semibold text-gray-900 dark:text-white">
            <ul>
                <li>Laravel Installation - <a href="https://laravel.com/docs/9.x/installation" target="_blank">https://laravel.com/docs/9.x/installation</a></li>
                <li>Create Database category</li>
                <li>Edit .env at DB_DATABASE, DB_USERNAME & DB_PASSWORD for database connection</li>
                <li>Run Laravel Command
                    <ul>
                        <li>
                            php artisan migrate
                            <ul>
                                <li>Create all tables for this app</li>
                            </ul>
                        </li>
                        <li class="mt-4">
                            php artisan db:seed --class=CategorySeeder
                            <ul>
                                <li>Create the dumpy data for this app</li>
                            </ul>    
                        </li>
                        <li class="mt-4">
                            php artisan test
                            <ul>
                                <li>Run the CategoryTest to check for errors</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    Register an account or use the below information to entry the backend 
                    <ul>
                        <li>
                            Email: rayrlam@yaho.com.hk
                            <br/>
                            Password: 12345678   
                        </li>
                    </ul> 
                </li>

                <li style="margin-top:20px">
                    Files
                    <ul>
                        <li>
                            Controller: App\Http\Controllers\CheckoutController
                        </li>
                        <li>
                            Helpers: App\Helpers\CheckoutHelper
                        </li>
                        <li>
                            Seeders: App\database\seeders\DataSeeder
                        </li>
                        <li>
                            Tests: Tests\Unit\ChekcoutTest
                        </li>
                        <li>
                            Modes
                            <ul>
                                <li>App\Models\Item</li>
                                <li>App\Models\Rule</li>
                            </ul> 
                        </li>
                        <li>
                            Views
                            <ul>
                        
                       
                                <li>
                                    <a href="{{ route('welcome') }}">
                                        welcome.blade.php
                                    </a>
                                </li>
                        
                            </ul> 
                        </li>
                    </ul>
                </li>
            </ul>  
        </div>
        
    </div>
</x-category-layout>    