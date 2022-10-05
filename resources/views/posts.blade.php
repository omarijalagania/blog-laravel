<x-layout>
    <article class="max-w-3xl mx-auto p-10">
        @foreach ($posts as $post)
            <h1 class="text-3xl font-bold mt-5 mb-8">

                <a href="/post/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </h1>
            <div class="text-gray-700">
                {{ $post->excerpt }}
            </div>
        @endforeach
    </article>
</x-layout>
