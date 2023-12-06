<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(RegistrationRequest $request)
    {
        $input = $request->validated();
        User::insert($input);
        return redirect('/login');
    }
}
