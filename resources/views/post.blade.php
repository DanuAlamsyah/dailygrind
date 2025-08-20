<x-layout :title="$title">

    <article class="py-8 max-w-screen-wd border-b border-gray-300 px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> | 2 days ago
        </div>
        <p class="my-4 font-light">{{$post['body']}}</p>
        <a href="/posts" class="text-blue-500 hover:underline">&laquo;Back to All Posts</a>
    </article>

</x-layout>