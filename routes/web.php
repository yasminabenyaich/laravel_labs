<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\TitreController;
use App\Models\Card;
use App\Models\Titre;
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
//// Views
Route::get('/', function () {
    $cards= Card::all()->shuffle();
    return view('home',compact('cards'));

})->name('home');

Route::get('/service',function(){
    $cards= Card::all()->shuffle();
    $titres= Titre::all();
    return view('service',compact('cards'));
})->name('service');

Route::get('/titre',function(){
    
    return view('titres');
})->name('titre');


Route::get('/blog',function(){
    return view('blog');
})->name('blog');
Route::get('/blogPost',function(){
    return view('blogPost');
})->name('blogPost');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::get('/element',function(){
    return view('element');
})->name('element');





Route::resource('/cards',CardController::class);
Route::resource('/titres',TitreController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
