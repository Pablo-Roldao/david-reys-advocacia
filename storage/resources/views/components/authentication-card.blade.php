<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 px-4 rounded-lg">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full  sm:max-w-md px-6 py-4 shadow-2xl overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
