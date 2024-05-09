<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $post->title }}</h3>
                    @if ($post->thumbnail)
                        <img src="{{ asset('thumbnails/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                            class="my-4 rounded-lg">
                    @endif
                    <p class="text-gray-600 dark:text-gray-300">{{ $post->content }}</p>
                    <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">Created at:
                        {{ $post->created_at->format('M d, Y') }}</p>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Last updated:
                        {{ $post->updated_at->format('M d, Y') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
