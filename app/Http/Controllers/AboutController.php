<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $profile = auth()->user();
        return view('user.about', compact('profile'),
    [
        'title' => 'About',
    ]);

    }
}
