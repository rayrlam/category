<x-category-layout>
    <x-slot name="header">
        <div class="flex justify-center sm:justify-start sm:pt-0">
            <h1 class="">
                {{ __('Breadcrumbs') }}    
            </h1>
        </div>
    </x-slot>

<<<<<<< HEAD
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
=======
    <div class="p-8 w-full bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
>>>>>>> ff2406772efa7c87060acd0723be739f71af6783
        <div class="mt-4">
            @if(isset($breadcrumbs))
                <x-breadcrumb :breadcrumbs="$breadcrumbs" />
            @endif
        </div>
    </div>
</x-category-layout>