<?php

namespace App\Http\Controllers\Front\Technologie;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TechnologieController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.technologie.index');
    }
}
