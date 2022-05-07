<x-category-layout>
    <x-slot name="header">
        <div class="flex justify-center sm:justify-start sm:pt-0">
            <h1 class="">
                {{ __('Breadcrumb') }}    
            </h1>
        </div>
    </x-slot>

    <div class="">
        <div class="max-w-7xl mx-auto">    
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('breadcrumbs')}}">
                        @csrf
                    
                        <div class="bg-white">
                            <div class="p-6 md:p-10">
                                <div class="">
                                    <p>Category Id</p>
                                    <input style="border: 1px solid #c2c2c2; padding:8px 20px; margin-bottom:10px" class="form-input rounded-md shadow-sm mt-1 block w-full" name="id" placeholder="Category Id" type="text" value="8">
                                </div>
                                <div>
                                    <p>Separator</p>
                                    <input style="border: 1px solid #c2c2c2; padding:8px 20px; margin-bottom:10px" class="form-input rounded-md shadow-sm mt-1 block w-full" name="sep" placeholder="Separator" type="text" value=">">
                                </div>

                                    <p>Breadcrumb</p>
                                    <input type="radio" name="show" value="1" checked="true">
                                    <label>With Url</label>
                                    <input type="radio" name="show" value="0">
                                    <label>Without Url</label>
                                </div>

                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button style="padding:8px 20px; background-color:green; color:white" type="submit">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-category-layout>