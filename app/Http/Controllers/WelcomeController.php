<?php

namespace App\Http\Controllers\WelcomeController; // IMPORTANT!!!

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return view('welcome');
    }    

    public function showGreeting() {
        echo "Show greeting page.";
    }

    public function redirectGreeting() {
        return redirect()->route('greeting');
    }

    // Other methods 
}
