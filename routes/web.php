<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route::get('/', function () {
//     return 'Bienvenido';
// });


// Route::get('blog', function () {
//     return 'Estudios Nuevos';
// });

// Route::get('blog/{slug}', function ($slug) {
//     return  $slug;
// });

// Route::get('buscar', function (Request $request) {
//     return $request->all();
// });

Route::get('blog', function () {
    $post=[
        ['id'=>1,'title'=>'PHP', 'slug'=>'laravel'],
        ['id'=>2,'title'=>'Python', 'slug'=>'django']

    ];
    return view('blog',['post'=>$post]);
 });


 