<x-layout>
    <form method="POST" action="/admin/posts">
        @csrf

        <div class="flex max-w-xl mx-auto p-10 flex-col space-y-3">
            <input class="border-2 p-3" placeholder="title" name="title" />
            <input class="border-2 p-3" placeholder="excerpt" name="excerpt" />
            <input class="border-2 p-3" placeholder="body" name="body" />
            <button class="bg-green-600 py-3" type="submit">Submit</button>
        </div>



    </form>

</x-layout>
