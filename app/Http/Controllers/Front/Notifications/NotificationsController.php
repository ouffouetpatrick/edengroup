<?php

namespace App\Http\Controllers\Front\Notifications;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.notifications.index');
    }

    public function show($id)
    {
        return view('front.notifications.show');
    }

}
