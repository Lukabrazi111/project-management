<div class="bg-gray-800 border-t border-gray-600 py-4 px-8">
    <x-container>
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-medium text-white">{{ $title }}</h1>
            @if(isset($button))
                <a href="#" class="text-white font-medium bg-green-600 py-1 px-3 rounded-md">{{ $button }}</a>
            @endif
        </div>
    </x-container>
</div>
