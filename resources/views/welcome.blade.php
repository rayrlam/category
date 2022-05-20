<x-category-layout>
    <div class="p-8 lg:border-2  lg:border-zinc-300">
        <div class="text-xl mt-4  text-gray-900 dark:text-white">
            <p>
                Imagine we have a database table of category information as per the below. This shows categories in 
                a hierarchical structure indicated by a parent_id. I.e. a category with a parent_id of 1 is a sub-category of Clothing, whereas a category with a parent_id of 5 is a sub-category of Men. Any 
                category with a sub-category of 0 is a top level category.
            </p>
        </div>
        <div class="mt-4">
            <table id="items">
                <tr>
                    <th>id</th>
                    <th>parent_id</th>
                    <th>name</th>
                </tr>
                @foreach($list as $v)
                <tr>
                    <td>{{ $v->id}}</td>
                    <td>{{ $v->parent_id }}</td>
                    <td>{{ $v->name }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        
        <div class="mt-4">
            <div class="text-xl mt-4  text-gray-900 dark:text-white">
                <p> 
                    We would like you to create a function that produces a category breadcrumb. This function should 
                    use parameters for the required category id and the separator.
                </p>
                <p class="mt-4 mb-4">
                    For example. If I supplied 8 as the category id and ‘>’ as the separator I would expect the result to be:
                </p>
                <p class="mb-4">  
                    <x-breadcrumb :breadcrumbs="$breadcrumbs['0']" /> 
                </p>
                <p class="mb-4 mt-4">
                    If I supplied 5 as the category id and ‘/’ as the separator I would expect the result to be:
                </p>
                <p class="mb-4">  
                    <x-breadcrumb :breadcrumbs="$breadcrumbs['1']" />
                </p>
                <p class="mb-4 mt-4">
                    For the purposes of this exercise assume you have a function called getCategory($id) available to 
                    supply you with an array of the category values when the category id is passed in.
                </p>

                <p>
                    For example: getCategory(8) would return
                </p>
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
            <hr class="hr" />
        </div>
        <div class="text-xl mt-4  text-gray-900 dark:text-white">
            <h2 class="text-xl font-bold">Setup Information</h2>
        </div>
        <div class="text-xl mt-4  text-gray-900 dark:text-white">
            <ul>
                <li class="ml-4">Laravel Installation - <a href="https://laravel.com/docs/9.x/installation" target="_blank" class="text-green-500 hover:text-blue-500">https://laravel.com/docs/9.x/installation</a></li>
                <li class="ml-4">Rename .env.example to .env</li>
                <li class="ml-4">
                    Create Database laravel
                </li>
                <li>
                    <div class="mt-4 bg-blue-800 text-gray-100 p-6 rounded-lg">
                        <div class="text-gray-400 mb-2">
                            /*<br>
                            ** Create by MySQL Comman<br>
                            */
                        </div>
                        CREATE DATABASE LARAVEL;        
                    </div>    
                </li>
                <li class="ml-4 mt-4">Run Laravel Command</li>
                <li>    
                    <ul>
                        <li>
                            <div class="mt-4 bg-blue-800 text-gray-100 p-6 rounded-lg">
                                <div class="text-gray-400 mb-2">
                                    /*<br>
                                    ** Create all tables for this app<br>
                                    */
                                </div>
                                php artisan migrate        
                         
                            
                                <div class="text-gray-400 mt-4 mb-2">
                                    /*<br>
                                    ** Create the dumpy data for this app<br>
                                    */
                                </div>
                                php artisan db:seed --class=DataSeeder     
             
                                <div class="text-gray-400 mt-4 mb-2">
                                    /*<br>
                                    ** Run test to check for errors<br>
                                    */
                                </div>
                                php artisan test    
                           
                                <div class="text-gray-400 mt-4 mb-2">
                                    /*<br>
                                    ** Running local server<br>
                                    */
                                </div>
                                php artisan serve        
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="mt-4">
                    Main Files
                </li>    
                <li class="text-indigo-700">App\Http\Controllers</li>
                <li class="ml-4 pb-4" title="App\Http\Controllers\CategoryController">CategoryController</li>
                <li class="text-indigo-700">App\Repositories</li>
                <li class="ml-4 pb-4" title="App\Repositories\CategoryRepository">CategoryRepository</li>
                <li class="text-indigo-700">App\Helpers</li>
                <li class="ml-4 pb-4" title="App\Helpers\BreadcrumbHelper">BreadcrumbHelper</li>
                <li class="text-indigo-700">Resources\views\components</li>
                <li class="ml-4 pb-4" title="Resources\views\components\breadcrumb">breadcrumb</li>
                <li class="text-indigo-700">App\database\seeders</li>
                <li class="ml-4 pb-4" title="App\database\seeders\DataSeeder">DataSeeder</li>
                <li class="text-indigo-700">Tests\Browser</li>
                <li class="ml-4 pb-4" title="Tests\Browser\CategoryTest">CategoryTest</li>
                <li class="text-indigo-700">App\Models</li>
                <li class="ml-4 pb-4" title=" App\Models\Category">Category</li>


                    <ul>
              
        
                 
         
                        <li>
                            Views
                            <ul>
                                <li class="ml-4">
                                    <a href="{{ route('welcome') }}" class="text-green-500 hover:text-blue-500">
                                        Welcome
                                    </a>
                                </li>
                                <li class="ml-4">
                                    <a href="{{ route('breadcrumb') }}" class="text-green-500 hover:text-blue-500">
                                        Breadcrumb
                                    </a>
                                </li>
                                <li class="ml-4">
                                    <a href="{{ url('categories/0') }}" class="text-green-500 hover:text-blue-500">
                                        Categories
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