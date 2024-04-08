<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $profile = auth()->user();
        return view('user.faq', compact('profile'),
    [
        'title' => 'Application Instructions',
    ]);

    }
}
