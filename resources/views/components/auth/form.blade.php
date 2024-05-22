<form method="POST" action="{{ $action ?? '#' }}" enctype="multipart/form-data" class="w-full max-w-md">
    @csrf

    <div class="flex justify-center mx-auto">
        <img class="w-auto h-7 sm:h-8" src="https://merakiui.com/images/logo.svg" alt="">
    </div>

    <div class="flex items-center justify-center mt-6">
        <a href="{{ route('login') }}"
           class="w-1/3 pb-4 font-medium text-center capitalize {{ request()->segment(1) === 'login' ? 'text-gray-800 border-b-2 border-blue-500 dark:border-blue-400' : 'border-b dark:border-gray-400 text-gray-500' }} dark:text-white">
            sign in
        </a>

        <a href="{{ route('register') }}"
           class="w-1/3 pb-4 font-medium text-center capitalize {{ request()->segment(1) === 'register' ?'border-b-2 border-blue-500 dark:border-blue-400' : 'border-b dark:border-gray-400 text-gray-500' }} dark:text-white">
            sign up
        </a>
    </div>

    @if(session()->has('error'))
        <div
            class="mt-6 bg-red-400 rounded px-2 py-2 text-center text-white font-medium">{{ session()->get('error') }}</div>
    @elseif(session()->has('success'))
        <div
            class="mt-6 bg-green-400 rounded px-2 py-2 text-center text-white font-medium">{{ session()->get('success') }}</div>
    @endif

    {{ $slot }}
</form>
