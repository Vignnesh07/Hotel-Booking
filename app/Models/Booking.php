<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'fname',
        'lname',
        'roomtype',
        'roomnumber',
        'email',
        'idcard',
        'phone',
        'residentialaddress',
        'city',
        'zipcode',
        'amount',
        'paidamount',
        'deposit',
        'checkindate',
        'checkoutdate',
        'checkedin',
        'checkedout',
    ];
}
