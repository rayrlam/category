<x-category-layout>
    <x-slot name="header">
        <div class="flex justify-center sm:justify-start sm:pt-0">
            <h1 class="">
                {{ __('Categories') }}    
            </h1>
        </div>
    </x-slot>

    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
        <h4>List Data By Parent Id</h4>    
        <div class="mt-4">
            <table id="items" style="margin:auto;width:97%">
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
</x-category-layout>