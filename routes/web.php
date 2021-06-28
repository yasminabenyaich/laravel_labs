<?php

use App\Http\Controllers\AboutContentController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CardImgController;
use App\Http\Controllers\CarousselController;
use App\Http\Controllers\CarousselItemController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\IconeController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\ServiceFeatureController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\VideoController;
use App\Models\Card;
use App\Models\Contact;
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
  
    return view('home',compact('cards',));

})->name('home');

Route::get('/service',function(){
    $cards= Card::all()->shuffle();
    $titres= Titre::all();
    return view('service',compact('cards','titres'));
})->name('service');

Route::get('/titre',function(){
    $titres= Titre::all();
    return view('titres',compact('titres'));
})->name('titre');


Route::get('/blog',function(){
    return view('blog');
})->name('blog');

Route::get('/blogPost',function(){
    return view('blogPost');
})->name('blogPost');

Route::get('/contact',function(){
    $contact = Contact::all();
    return view('contact',compact('contact'));
})->name('contact');

Route::get('/element',function(){
    return view('element');
})->name('element');

Route::resource('/navbars',NavbarController::class);

Route::resource('/headers',HeaderController::class);

Route::resource('/heroes',HeroController::class);

Route::resource('/aboutContents',AboutContentController::class);



Route::resource('/carousselItems',CarousselItemController::class);

Route::resource('/testimonials',TestimonialController::class);
Route::post("/testimonials/{id}/download",[TestimonialController::class],"download");

Route::resource('/cardImgs',CardImgController::class);
Route::post("cardImgs/{id}/download",[CardImgController::class],"download");

Route::resource('/newsletters', NewsLetterController::class);

Route::resource('/contacts',ContactController::class);

Route::resource('/serviceFeatures',ServiceFeatureController::class);

Route::resource('/videos',VideoController::class);

Route::resource('icones',IconeController::class);

Route::resource('/cards',CardController::class);

Route::resource('/titres',TitreController::class);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
