<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function store(Request $request){
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'travel_date' => $request->travel_date,
            'number_of_members' => $request->number_of_members,
            'message' => $request->message,
        ]);

         return Contact::all();
        // return Redirect::to('/');
    }
}
