<x-layout>
    <article class="max-w-3xl mx-auto p-10">
        @foreach ($posts as $post)
            {!! $post !!}
        @endforeach
    </article>
</x-layout>
