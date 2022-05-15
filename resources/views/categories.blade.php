<x-category-layout>
    <div class="p-8 lg:border-2  lg:border-zinc-300">
        <div class="flex" style="justify-content:space-between; align-items:baseline">
            <h2 class="font-bold lg:text-3xl text-2xl mt-4 mb-4">
                {{ __('Categories') }}
            </h2>
            <div class="mt-4 mb-4">
                <a href="{{route('breadcrumb')}}" class="text-green-500 hover:text-blue-500">>> Breadcrumb</a>
            </div>
        </div>  

        <div class="p-6">
            <h4>List Data By Parent Id</h4>    
            <div class="mt-4">
                <table id="items">
                    <tr>
                        <th>id</th>
                        <th>parent_id</th>
                        <th style="min-width:200px">name</th>
                    </tr>
                    @forelse($categories as $c)
                    <tr>
                        <td>
                            {{ $c->id }}
                        </td>
                        <td>
                            {{ $c->parent_id }}
                        </td>
                        <td>
                            {{ $c->name }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">Category Not Found</td>
                    </tr>
                    @endforelse    
                </table>
            </div>
        </div>
    </div>
</x-category-layout>