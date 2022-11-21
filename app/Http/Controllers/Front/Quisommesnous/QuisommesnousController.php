<?php

namespace App\Http\Controllers\Front\Quisommesnous;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuisommesnousController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.quisommesnous.index');
    }
}
