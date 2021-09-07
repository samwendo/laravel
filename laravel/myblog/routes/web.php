<?php

use App\Models\Post;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Translation\Loader\YamlFileLoader;

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
    return view("posts",[
        'posts' => Post::all()
    ]);
    // $file = resource_path("post/1.html");

    // $document = YamlFrontMatter::parseFile($file);
    // ddd($document);

 // ddd($posts);
    // return view('posts', [
    //     "posts" => Post::all()
    // ]);
});


Route::get("/posts/{post:slug}", function(Post $post){
    return view("post",[
        'post' => $post
    ]);

//   return !$post? abort(404): $post;
}); 
