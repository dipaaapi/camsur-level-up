<div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
    @isset($title)
        <h3 class="text-lg font-semibold mb-2 text-gray-800 dark:text-gray-200">{{ $title }}</h3>
    @endisset
    <div class="text-gray-700 dark:text-gray-300">
        {{ $slot }}
    </div>
</div>
