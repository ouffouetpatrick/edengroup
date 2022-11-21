<?php

namespace App\Http\Controllers\Front\Commandes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommandesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.commandes.index');
    }
    public function show($id)
    {
        return view('front.commandes.show');
    }
}

