<?php


/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller

{
    public function store(Request $request)
    {
        // Walidacja danych
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'content' => 'required|min:5',
        ]);

        // Tworzenie komentarza
        Comment::create($request->only('name', 'email', 'website', 'content'));

        return redirect()->back()->with('success', 'Komentarz został dodany!');
    }

    public function index()
    {
        // Pobieranie wszystkich komentarzy
        $comments = Comment::latest()->get();

        return view('comments.index', compact('comments'));
    }
}
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller

{
    public function store(Request $request)
    {
        // Walidacja danych
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'content' => 'required|min:5',
        ]);

        // Tworzenie komentarza
        Comment::create($request->only('name', 'email', 'website', 'content'));

        return redirect()->back()->with('success', 'Komentarz został dodany!');
    }

    public function index()
    {
        // Pobieranie wszystkich komentarzy
        $comments = Comment::latest()->get();

        return view('comments.index', compact('comments'));
    }
}