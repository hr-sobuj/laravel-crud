<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>



    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-300 dark:text-gray-100">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="title" class="block text-gray-400 dark:text-gray-300 font-bold mb-2">Title:</label>
                            <input type="text" id="title" name="title" class="w-full border border-gray-600 dark:border-gray-500 rounded-md py-2 px-3 text-black dark:text-gray-900 leading-tight focus:outline-none focus:border-red-500 dark:focus:border-red-500 focus:shadow-outline" placeholder="Enter the post title">
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
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
