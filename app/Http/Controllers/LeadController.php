<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class LeadController extends Controller
{
    public function store(Request $request){
        Lead::create([
            'name' => $request->name,
            'email' => $request->email,
            'package_name' => $request->package_name ? $request->package_name : 'General contact form',
            'mobile_number' => $request->mobile_number,
            'travel_date' => $request->travel_date,
            'number_of_members' => $request->number_of_members,
            'message' => $request->message,
        ]);

        return Inertia::render('ThankYou');
    }
}
