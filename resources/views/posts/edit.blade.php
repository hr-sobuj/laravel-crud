<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-300 dark:text-gray-100 leading-tight" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-4">
                <li>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <span aria-hidden="true" class="text-gray-400 dark:text-gray-300"> > </span>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}">Posts</a>
                </li>
                <li>
                    <span aria-hidden="true" class="text-gray-400 dark:text-gray-300"> > </span>
                </li>
                <li>Edit Post</li>
            </ol>
        </nav>
    </x-slot>

    <div class="py-12 bg-gray-900 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-300 dark:text-gray-100">
                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="title" class="block text-gray-400 dark:text-gray-300 font-bold mb-2">Title:</label>
                            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" class="w-full border border-gray-600 dark:border-gray-500 rounded-md py-2 px-3 text-black dark:text-gray-900 leading-tight focus:outline-none focus:border-red-500 dark:focus:border-red-500 focus:shadow-outline">
                            @error('title')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="thumbnail" class="block text-gray-400 dark:text-gray-300 font-bold mb-2">Thumbnail:</label>
                            <input type="file" id="thumbnail" name="thumbnail" class="w-full border border-gray-600 dark:border-gray-500 rounded-md py-2 px-3 text-gray-300 dark:text-gray-100 leading-tight focus:outline-none focus:border-red-500 dark:focus:border-red-500 focus:shadow-outline">
                            @error('thumbnail')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
