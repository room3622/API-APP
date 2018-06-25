<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tags = DB::table('users')->paginate(2);
       // $users = DB::table('users')->paginate(2);


        return view('home',compact('tags'));
    }


    public function tags()
    {
        $tags = DB::table('tags')->paginate(7);
        return view('tags',compact('tags'));
    }



}
