<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\todoitem;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = Auth::user()->id;
    //    $todoitems = todoitem::where('user_id',$user_id);
    $todoitems = todoitem::where('user_id',$user_id)->get();

        return view('home')->with('todoitems',$todoitems);
    }
}
