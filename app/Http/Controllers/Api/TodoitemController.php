<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\todoitem;
use Auth;
use lluminate\Http\RedirectResponse;

class Todoitemcontroller extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function additem(Request $request){
        $todoitems = new todoitem();

        $todoitems->title = $request->input('title');
        $todoitems->content = $request->input('content');
        //  $todoitems->user_id = Auth::user()->id;
         $todoitems->user_id = $request->input('id');


        $todoitems->save();

        // return response()->json($todoitems);
        return redirect('home');
   }
}
