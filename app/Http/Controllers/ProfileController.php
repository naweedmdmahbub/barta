<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return auth();
        $profile = auth();
        return view('single', compact('profile'));
    }
    
    public function edit()
    {
        
    }
}
