<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function __construct() {
        $user = \DB::table('users')->where('name', 'sachaw')->first();
        \View::share ( 'user', $user );

    }
    public function showDashboard()
    {
        $user = \DB::table('users')->where('name', 'sachaw')->first();
        return view('frontend.dashboard', ['user' => $user]);
    }
    public function showProfile()
    {
        return view('frontend.profile');
    }
    public function showFeed()
    {
        return view('frontend.feed');
    }
    public function showUser($name)
    {
        return view('frontend.user', ['name' => $name]);
    }
    public function showSettings()
    {
        return view('frontend.settings');
    }
    public function showWatch()
    {
        return view('frontend.watch');
    }
    public function showListen()
    {
        return view('frontend.listen');
    }
}