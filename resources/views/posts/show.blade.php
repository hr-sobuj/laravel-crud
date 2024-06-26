<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    <div class="container mt-7">
        <x-view-single-post :post="$post" :back="'posts.index'" />
    </div>

</x-app-layout>
