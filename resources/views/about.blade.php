<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <h2 class="text-4xl py-3 text-center text-green-500 p-10 bg-gray-500">About page</h2>

    <ul>
        @foreach ($tasks as $task)
            @if ($task->completed)
                <li class="text-2xl text-green-500">{{ $task->description }}</li>
            @else
                <li class="text-2xl text-red-500">{{ $task->description }}</li>
            @endif
        @endforeach
    </ul>

    <a class="text-center p-4 " href="/">Go back</a>

</body>

</html>
