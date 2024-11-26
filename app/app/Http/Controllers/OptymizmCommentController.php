<?php

namespace App\Http\Controllers;

use App\Models\OptymizmComment;
use Illuminate\Http\Request;

class OptymizmCommentController extends Controller
{
    public function index()
    {
        $comments = OptymizmComment::latest()->get();
        return view('optymizm', compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'content' => 'required|min:5',
        ]);

        OptymizmComment::create($request->only('name', 'email', 'website', 'content'));

        return redirect()->back()->with('success', 'Komentarz został dodany!');
    }
}
