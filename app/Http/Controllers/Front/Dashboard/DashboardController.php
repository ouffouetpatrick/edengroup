<?php

namespace App\Http\Controllers\Front\Dashboard;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('userfront')->except(['index','store']);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.Dashboard.index');
    }
}
