<form action="{{ route('home') }}" method="GET" class="mb-4">
    <div class="grid grid-cols-2 gap-4 mt-16">
        <div>
            <label for="start_date" class="block text-sm font-medium">Start Date:</label>
            <input type="date" id="start_date" name="start_date"
                class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500">
        </div>
        <div>
            <label for="end_date" class="block text-sm font-medium ">End
                Date:</label>
            <input type="date" id="end_date" name="end_date"
                class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:ring-red-500 focus:border-red-500 ">
        </div>
    </div>
    <div class="mt-4">
        <button type="submit"
            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-red-500 hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 dark:bg-red-600 dark:hover:bg-red-700">Filter</button>
    </div>
</form>
