@props(['post','back'])

<div class="flex flex-col space-y-3">
    <div class="flex justify-start">
        <a href="{{ route($back) }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-300 flex justify-center items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
              </svg>
            <span>Back</span>
        </a>
    </div>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div>
            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ $post->title }}</h3>
            @if ($post->thumbnail)
                <img src="{{ asset('thumbnails/' . $post->thumbnail) }}" alt="{{ $post->title }}" class="my-4 rounded-lg">
            @endif
            <p class="text-gray-600 dark:text-gray-300">{{ $post->content }}</p>
            <p class="mt-4 text-sm text-gray-500 dark:text-gray-400">Created at:
                {{ $post->created_at->format('M d, Y') }}</p>
            <p class="text-sm text-gray-500 dark:text-gray-400">Last updated:
                {{ $post->updated_at->format('M d, Y') }}</p>
        </div>
    </div>
</div>
