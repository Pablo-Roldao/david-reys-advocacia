<button {{ $attributes->merge(['type' => 'submit', 'class' => 'uppercase focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 hover:bg-gray-600 hover:text-gray-800 bg-blue-900 text-white font-bold p-1 h-52 w-full rounded-lg']) }}>
    {{ $slot }}
</button>
