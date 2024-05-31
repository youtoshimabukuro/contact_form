<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function register(RegisterRequest $request)
    {
        return view('auth.register');
    }

    public function login(LoginRequest $request)
    {
        return view('auth.login');
    }

    public function admin()
    {
        return view('admin');
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function contact(Request $request)
    {
        return view('contact');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name','last_name','gender', 'email','first-tel','second-tel','third-tel','address','building', 'content', 'detail']);
        return view('confirm',compact('contact'));
    }
    
    public function store(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'category_id', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
