<x-layout>
    <article class="max-w-3xl mx-auto p-10">

        <h1 class="text-3xl font-bold mb-8">
            {{ $post->title }}
        </h1>
        <div class="text-gray-700">
            {{ $post->body }}

        </div>

    </article>
    <div class="max-w-3xl mx-auto p-10">
        <a class="font-bold" href="/">Go Back</a>
    </div>

</x-layout>
