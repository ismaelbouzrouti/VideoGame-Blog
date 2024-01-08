<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ContactController;

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




//routes for visitors only
Route::middleware('guest')->group(function () {

    Route::get('/', function () {
        return view('welcome');
    });

});



//routes for visitors and authenticated users
Route::get('/about', function () {
    return view('about-page');
})->name('aboutPage');

//searching and seeing users profile
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/dashboard/search', [DashboardController::class, 'search'])->name('dashboard.search');
Route::get('/profile/{user}', [DashboardController::class, 'showProfile'])->name('profile.profile');

//faq
Route::get('/faq', [FaqController::class, 'showFaqPage'])->name('faq.faqPage');

//contact
Route::get('/contact', [ContactController::class, 'showContact'])->name('contact.contactPage');
Route::post('/contact/send', [ContactController::class, 'storeContactForm'])->name('contact.store');



//routes for authenticated users only
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


//routes for admins only
Route::middleware(['auth', 'admin'])->group(function () {

    //create post
    Route::get('/posts/create', [PostController::class, 'showPostForm'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    //edit post
    Route::get('/posts/{post}/edit', [PostController::class, 'editPost'])->name('posts.edit');
    Route::put('/posts/{post}', [PostController::class, 'updatePost'])->name('posts.update');

    //delete post
    Route::delete('post/{post}', [PostController::class, 'deletePost'])->name('posts.delete');

    //promote user to admin
    Route::post('/users/{user}/promote', [UserController::class, 'promoteUser'])->name('users.promote');




    //category form
    Route::get('/faq/create', [FaqController::class, 'createCategory'])->name('faq.create-category');

    //store category
    Route::post('/faq/create/store', [FaqController::class, 'storeCategory'])->name('faq.store-category');

    //item form
    Route::get('/faq/{category}/create-item', [FaqController::class, 'createItem'])->name('faq.create-item');

    //item store
    Route::post('/faq/{category}/create-item', [FaqController::class, 'storeItem'])->name('faq.store-item');

    //delete category
    Route::delete('/faq/category/{category}', [FaqController::class, 'deleteCategory'])->name('faq.delete-category');

    // Delete Item
    Route::delete('/faq/item/{item}', [FaqController::class, 'deleteItem'])->name('faq.delete-item');

    //admin contact page
    Route::get('/contactAdmin', [ContactController::class, 'showAdminContactPage'])->name('contact.contactAdminPage');


});

require __DIR__ . '/auth.php';
