<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/', function () {
    return ('Selamat Datang');
});

// Route::get('/', function () {
//     return view('Welcome');
// });

Route::get('/about', function () {
    return ('Nim Fasya : 2341760077');
});

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' . $name;
// });

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan NIM " . $id;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{Id}', [PageController::class, 'articles']);

use App\Http\Controllers\Homecontroller;

Route::get('/', [PageController::class, 'index']);

use App\Http\Controllers\AboutController;

Route::get('/', [PageController::class, 'about']);

use App\Http\Controllers\Articlecontroller;

Route::get('/', [PageController::class, 'articles']);

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index',
    'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Fasya']);
//     });

Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Andi']);
    });

Route::get('/greeting', [WelcomeController::class,'greeting']);