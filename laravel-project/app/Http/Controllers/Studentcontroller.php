<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function register(){
        return view('StudentRegistration');
    }
    public function create(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required | email',
            'password' => 'required'
        ]);
        // return view('StudentRegistration');
    }
}
