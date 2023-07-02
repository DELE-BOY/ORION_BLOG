<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnswerRequest;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AnswerController extends Controller
{
    public function store(StoreAnswerRequest $request)
    {
        $inputs = $request->all();
        $comment = new Answer();
        $comment->fill($inputs);
        $comment->user_id = Auth::id();
        $comment->forum_id = $inputs['forum_id'];
        $comment->save();

       

        return redirect()->back();
    } 

    public function destroy($id)
    {

        $answer = Answer::find($id);
        $answer->delete();
        
        return redirect()->back();
    }
 
}
