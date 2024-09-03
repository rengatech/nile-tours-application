<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Package;
use Illuminate\Support\Facades\Http;

class PackageController extends Controller
{
    // public function store(Request $request){
    //     Package::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'package_name' => $request->package_name ? $request->package_name : 'General contact form',
    //         'mobile_number' => $request->mobile_number,
    //         // 'from_city' => $request->from_city,
    //         'travel_date' => $request->travel_date,
    //         'number_of_members' => $request->number_of_members,
    //         'message' => $request->message,
    //     ]);

    //     $apiKey = config('app.rednote_api_key');
    //     $url = 'https://rednote.in/api/v1.7/sales-crm/API/InsertLeadsForAPI';

    //     $data = [
    //         'APIKey' => $apiKey,
    //         'FirstName' => $request->name,
    //         'Mobile' => $request->mobile_number,
    //         'Email' => $request->email,
    //         'StateId' => 24,
    //         'ProductId' => 140979,
    //         'AssignedTo' => 2062,
    //         // 'AddressLine1' => $request->from_city,
    //         'Description' => $request->message,
    //         'LeadStatusId' => 2796,
    //         'LeadSourceId' => 809,
    //         'EnquiredDate' => now()->toDateTimeString(),
    //         'LeadHealthId' => 0,
    //         'CustomTextValue1' => $request->number_of_members,
    //         'CustomTextValue2' => $request->travel_date,
    //     ];

    //     $privyrUrl = 'https://www.privyr.com/api/v1/incoming-leads/0vZfjMQw/PzwrSsrl#generic-webhook';
    //     $privyrData = [
    //         'name' => $request->name,
    //         'display_name' => $request->name,
    //         'email' => $request->email,
    //         'package_name' => $request->package_name ? $request->package_name : 'General contact form',
    //         'phone' => $request->mobile_number,
    //         // 'from_city' => $request->from_city,
    //         'travel_date' => $request->travel_date,
    //         'number_of_members' => $request->number_of_members,
    //         'message' => $request->message,
    //     ];

    //     $rednoteResponse = Http::post($url, $data);
    //     $privyrResponse = Http::post($privyrUrl, $privyrData);
    //     //    Http::post($url, $data ,$privyrUrl, $privyrData);

    //         return Inertia::render('ThankYou');

    // }

}


