<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'cus_name',
        'cus_email',
        'cus_id',
        'cus_phone_number',
        'cus_address',
        'cus_city',
        'cus_zipcode',
        'total_price',
        'paid_amount',
        'deposit',
        'check_in_date',
        'check_out_date',
        'checked_in',
        'checked_out',
        'room_id',
    ];
}
