<?php

namespace App\Http\Controllers;

use App\Models\PracujeszComment;
use Illuminate\Http\Request;

class PracujeszCommentController extends Controller
{
    public function index()
    {
        $comments = PracujeszComment::latest()->get();
        return view('pracujesz', compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'content' => 'required|min:5',
        ]);

        PracujeszComment::create($request->only('name', 'email', 'website', 'content'));

        return redirect()->back()->with('success', 'Komentarz został dodany!');
    }
}
