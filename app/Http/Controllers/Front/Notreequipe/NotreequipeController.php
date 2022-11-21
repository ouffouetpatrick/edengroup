<?php

namespace App\Http\Controllers\Front\Notreequipe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotreequipeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.notreequipe.index');
    }
}
