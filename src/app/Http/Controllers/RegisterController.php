<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{

    public function register(RegisterRequest $request)
    {
        return view('register');
    }
}
