<x-layout :title="$title">
    <p>
        Welcome to the {{ $title }}!
        <div class="flex items-center space-x-4 mt-4">
            @for ($i = 0; $i < 5; $i++)
                <div class="w-8 h-8 bg-blue-500 rounded-full text-xs grid text-white place-items-center">{{ $i + 1 }}</div>
            @endfor
        </div>
    </p>
</x-layout>