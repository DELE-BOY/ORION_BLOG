<?php

namespace App\Http\Controllers\Forum;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreForumRequest;
use App\Models\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::orderBy('id', 'asc')->get();


        return view('forum.index', compact('forums'));
    }

    public function create()
    {

        return view('forum.create');
    }

    public function store(StoreForumRequest $request)
    {





        $forum = new Forum();
        $forum->questions = $request->questions;
        $forum->user_id = Auth::id();

        $forum->save();






        return redirect('/forum')
            ->with('flash', 'Foro creado exitosamente');
    }
    public function show($id)
    {

        $forum = Forum::find($id);

        $answer = $forum->answer()->get();

       
      
        return view('forum.show', compact('forum', 'answer'));
    }
}
