<?php

namespace App\Http\Controllers;

use App\User;
use App\AboutCompany;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $profile = User::all()->first();
        $about = AboutCompany::all()->first();
        return view('homepage', compact('profile', 'about'));
    }

    public function about() {
        //
    }
}
