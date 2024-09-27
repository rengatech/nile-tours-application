<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThankYouController extends Controller
{
    public function index(Request $request)
    {
        return inertia('ThankYou', [
            'name' => session('name'),
            'email' => session('email'),
            'mobile_number' => session('mobile_number'),
        ]);
    }
}
