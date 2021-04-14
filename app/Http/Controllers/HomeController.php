<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // return view('home');

        //redirect ke view
        if (Auth::user()->level == 1) {
            return redirect('/admin');
        } elseif (Auth::user()->level == 2) {
            return redirect('/branch');
        } else{
            return 'Woops! something went wrong';
        }
    }
}
