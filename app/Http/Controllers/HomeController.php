<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the fronts message
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('content');
    }
}
