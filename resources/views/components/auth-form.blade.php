<form class="w-full max-w-md">
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
    {{ $slot }}
</form>
