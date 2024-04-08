<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $profile = auth()->user();
        return view('user.team', compact('profile'),
    [
        'title' => 'Team',
    ]
    );

    }
}
