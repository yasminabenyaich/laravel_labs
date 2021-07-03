<?php

use App\Http\Controllers\AboutContentController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CardImgController;
use App\Http\Controllers\CarousselItemController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\IconeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\NewsletterMailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
use App\Http\Controllers\VideoController;
use App\Models\AboutContent;
use App\Models\Card;
use App\Models\Contact;
use App\Models\Navbar;
use App\Models\NewsLetter;
use App\Models\Post;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Titre;
use App\Models\Video;
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
    $navbars = Navbar::all();
    $aboutContent = AboutContent::first();
    $titres = Titre::all();
    $video= Video::first();
    $contact = Contact::first();
    $testimonials = Testimonial::all();
  return view('home',compact('cards','navbars','aboutContent','titres','video','testimonials','contact'));

})->name('home');


Route::get('/service',function(){
    $cards= Card::all()->shuffle();
    $titres= Titre::all();
    $navbars = Navbar::all();
    $services = Service::all()->shuffle();
    $contact = Contact::first();
    $newsLetters = NewsLetter::all();
    return view('service',compact('cards','titres','navbars','services','contact','newsLetters'));
})->name('service');


Route::get('/titre',function(){
    $titres= Titre::all();
    return view('titres',compact('titres'));
})->name('titre');


Route::get('/blog',function(){
    $navbars = Navbar::all();
    $posts = Post::all();
    $newsLetters = NewsLetter::all();
    return view('blog',compact('navbars','posts','newsLetters'));
})->name('blog');

Route::get('/blogPost/{post_id}',function($post_id){
    $navbars = Navbar::all();
    $post= Post::find($post_id);
    return view('blogPost',compact('navbars','post'));
})->name('blogPost');

Route::get('/contact',function(){
    $contact = Contact::first();
    $navbars = Navbar::all();
    return view('contact',compact('contact','navbars'));
})->name('contact');

Route::get('/element',function(){
    return view('element');
})->name('element');

Route::resource('/navbars',NavbarController::class);

// Route::resource('/headers',HeaderController::class);

Route::resource('/heroes',HeroController::class);

Route::resource('/aboutContents',AboutContentController::class);



Route::resource('/carousselItems',CarousselItemController::class);

Route::resource('/testimonials',TestimonialController::class);
Route::post("/testimonials/{id}/download",[TestimonialController::class],"download");

Route::resource('/cardImgs',CardImgController::class);
Route::post("cardImgs/{id}/download",[CardImgController::class],"download");

Route::resource('/newsletters', NewsLetterController::class);
Route::resource('/newsletterMails', NewsletterMailController::class);

Route::resource('/contacts',ContactController::class);

Route::resource('/services', ServiceController::class);


Route::resource('/videos',VideoController::class);

Route::resource('icones',IconeController::class);

Route::resource('/cards',CardController::class);

Route::resource('/titres',TitreController::class);

Route::resource('/comments',CommentController::class);

Route::resource('/posts',PostController::class);
//MAIL
Route::post("/send-mail",[MailController::class,"sendMail"]);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
