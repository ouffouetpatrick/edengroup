<?php

namespace App\Http\Controllers\Front\Ecommerce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EcommerceController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.ecommerce.index');
    }

    public function show($id)
    {
        return view('front.ecommerce.show');
    }
}
