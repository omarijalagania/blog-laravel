<?php



namespace App\Models;

use Illuminate\Support\Facades\File;

class Post
{
    public static function find($slug)
    {
        $path = resource_path("posts/{$slug}.html");
        if (!file_exists($path)) {
            return abort(404);
        }
        return file_get_contents($path);
    }

    public static function all()
    {
        $posts =  File::files(resource_path("posts/"));

        return array_map(function ($file) {
            return $file->getContents();
        }, $posts);
    }
}
