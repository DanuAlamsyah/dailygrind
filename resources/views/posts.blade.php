<x-layout :title="$title">

    @foreach ($posts as $item)
    <article class="py-8 max-w-screen-wd border-b border-gray-300 px-4 sm:px-6 lg:px-8">
        <a href="/posts/{{ $item->author->name }}" class="hover:underline">
        <h2 class="text-2xl font-bold">{{ $item['title'] }}</h2>
        </a>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $item->author->username }}" class="hover:underline">{{ $item->author->name }}</a> | 2 days ago
        </div>
        <p class="my-4 font-light">{{ Str::limit($item['body'], 120) }}</p>
        <a href="/posts/{{ $item['slug'] }}" class="text-blue-500 hover:underline">Read More &raquo;</a>
    </article>
    @endforeach
</x-layout>
