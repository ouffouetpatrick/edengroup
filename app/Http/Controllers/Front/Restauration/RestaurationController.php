<?php

namespace App\Http\Controllers\Front\Restauration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.restauration.index');
    }
    public function show($id)
    {
        return view('front.restauration.show');
    }
}
