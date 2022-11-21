<?php

namespace App\Http\Controllers\Front\apropos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AproposController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.apropos.index');
    }
}
