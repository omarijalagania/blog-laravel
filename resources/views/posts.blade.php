<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Blog</title>

</head>

<body>
    <article class="max-w-3xl mx-auto p-10">
        @foreach ($posts as $post)
            <?= $post ?>
        @endforeach
    </article>

</body>

</html>
