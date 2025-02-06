<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $guarded = [];

    // protected $fillable = ['name' , 'email' , 'mobile_number' , 'package_name' , 'travel_date', 'number_of_members' , 'message'];

}
