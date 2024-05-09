<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-300 dark:text-gray-100 leading-tight" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-4">
                <li>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <span aria-hidden="true" class="text-gray-400 dark:text-gray-300"> <span>&nbsp;</span> >
                        <span>&nbsp;</span> </span>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}">Home</a>
                </li>
            </ol>
        </nav>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="bg-white dark:bg-gray-700 p-4 my-4 rounded-md shadow-md">
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
