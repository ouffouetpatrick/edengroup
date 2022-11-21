<?php

namespace App\Http\Controllers\Front\Panier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanierController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.panier.index');
    }
}
