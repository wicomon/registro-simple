<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $usuario = auth()->user();
        $total = auth()->user()->count();

        if ($usuario->rol == 'admin') {
            return view('admin.index', compact('total'));
        }
        
        return view('home', compact('total'));
    }
}
