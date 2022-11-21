<?php

namespace App\Http\Controllers\Front\Demandes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemandesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.demandes.index');
    }

    public function show($id)
    {
        return view('front.demandes.show');
    }
}
