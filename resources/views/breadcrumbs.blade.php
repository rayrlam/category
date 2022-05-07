<x-category-layout>
    <x-slot name="header">
        <div class="flex justify-center sm:justify-start sm:pt-0">
            <h1 class="">
                {{ __('Breadcrumbs') }}    
            </h1>
        </div>
    </x-slot>

    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
        <div class="mt-4">
            @if(isset($breadcrumbs))
                <x-breadcrumb :breadcrumbs="$breadcrumbs" />
            @endif
        </div>
    </div>
</x-category-layout>