<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Stevebauman\Location\Facades\Location;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {
        $ip = $request->ip();
        // $ip = '140.126.176.246'; /* Static IP address */
        $userInformation = Location::get($ip);
        return view('user', compact('userInformation'));
    }
}
