<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

$files = File::files (resource_path("posts/"));

$posts = [];

// foreach($files as $file){
//     $posts[] = file_get_contents($file);
// }

$posts = collect($files)->map(function($file){
    return file_get_contents($file);
});
// ddd($posts);
    return view('posts', [
        "posts" => $posts

    ]);
});


Route::get('/posts/{id}',function($id){
    $post = file_get_contents(
        resource_path("posts/{$id}.html")
    );
    return view("post",
['post'=>$post]
);

    // return view("posts");
});

