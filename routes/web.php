<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('home');
});
Route::get('/stronaglowna', function () {
    return view('home');
});


Route::get('/kontakt', function () {
    return view('kontakt');
});

Route::get('/aktualnosci', function () {
    return view('aktualnosci');
});
/*
use App\Http\Controllers\CommentController;
// Trasa do widoku 'dodatek' z pobraniem komentarzy
Route::get('/dodatek', function () {
    $comments = App\Models\Comment::latest()->get();
    return view('dodatek', compact('comments'));
});







 Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
 Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
*/
// Trasa do widoku 'dodatek' z pobraniem komentarzy

Route::get('/dodatek', function () {
    $comments = App\Models\Comment::latest()->get();
    return view('dodatek', compact('comments'));
});

// Trasy do dodawania komentarzy
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');




use App\Http\Controllers\OptymizmCommentController;
use App\Http\Controllers\PracujeszCommentController;
use App\Models\OptymizmComment;
use App\Models\PracujeszComment;

// Trasa do strony Optymizm
Route::get('/optymizm', function () {
    $comments = OptymizmComment::latest()->get(); // Pobieranie komentarzy z tabeli 'optymizmcomments'
    return view('optymizm', compact('comments'));
});

// Trasa do strony Pracujesz
Route::get('/pracujesz', function () {
    $comments = PracujeszComment::latest()->get(); // Pobieranie komentarzy z tabeli 'pracujeszcomments'
    return view('pracujesz', compact('comments'));
});

// Trasy do obsługi komentarzy Optymizm
Route::get('/optymizmcomments', [OptymizmCommentController::class, 'index'])->name('optymizmcomments.index');
Route::post('/optymizmcomments', [OptymizmCommentController::class, 'store'])->name('optymizmcomments.store');

// Trasy do obsługi komentarzy Pracujesz
Route::get('/pracujeszcomments', [PracujeszCommentController::class, 'index'])->name('pracujeszcomments.index');
Route::post('/pracujeszcomments', [PracujeszCommentController::class, 'store'])->name('pracujeszcomments.store');