<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                <x-filter action="{{ route('posts.index') }}" />

                @foreach ($posts as $idx => $post)
                    <x-view-post :post="$post" :index="$idx" :showRoute="'posts.show'" />
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>
