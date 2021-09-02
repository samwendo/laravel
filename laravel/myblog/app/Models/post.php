<?php
namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post {

    public static function all(){

   $files = File::files(resource_path("posts/"));

   $posts=  collect($files)->map(
       fn($file) =>
          YamlFrontMatter::parseFile
          ($file)
     );

     return $posts;

    }

    public static function find($id){

        $allPosts = static::all();
        $post = $allPosts->filter(
            fn($post)=> $post->id == $id
        );
            return $post[0];
    }
}
