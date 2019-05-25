<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WifiScan extends Model
{
    protected $fillable = ['name', 'email', 'phone_number', 'date'];
}
