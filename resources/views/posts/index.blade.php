<x-app-layout>
    <x-slot name="header">
        <nav class="font-semibold text-xl text-gray-300 dark:text-gray-100 leading-tight" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-4">
                <li>
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <span aria-hidden="true" class="text-gray-400 dark:text-gray-300"> <span>&nbsp;</span> > <span>&nbsp;</span>  </span>
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
                <form action="{{ route('posts.index') }}" method="GET" class="mb-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="start_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Start Date:</label>
                            <input type="date" id="start_date" name="start_date" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600">
                        </div>
                        <div>
                            <label for="end_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">End Date:</label>
                            <input type="date" id="end_date" name="end_date" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600">
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:bg-blue-600 dark:hover:bg-blue-700">Filter</button>
                    </div>
                </form>

                @foreach ($posts as $post)
                <div class="bg-white dark:bg-gray-700 p-4 my-4 rounded-md shadow-md">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                            <a href="{{ route('posts.show', $post->id) }}" class="hover:text-blue-700 dark:hover:text-blue-500">{{ $post->title }}</a>
                        </h3>
                        <div class="flex space-x-2">
                            <a href="{{ route('posts.edit', $post->id) }}" class=" hover:text-blue-700 text-blue-300 dark:hover:text-blue-500">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 dark:text-red-300 dark:hover:text-red-500">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
