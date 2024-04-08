<?php

namespace App\Http\Controllers;

use auth;
use App\Models\DmgTypes;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profile = auth()->user();
        $solution  = DmgTypes::all();
        return view('user_view.index', compact('profile', 'solution'),[
            'title' => 'Home',
        ]);

    }
}
