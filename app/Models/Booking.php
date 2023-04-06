<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model {
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'fName',
        'lName',
        'roomType',
        'roomNumber',
        'email',
        'idCard',
        'phone',
        'address',
        'city',
        'zipCode',
        'amount',
        'paidAmount',
        'deposit',
        'checkInDate',
        'checkOutDate',
        'checkedIn',
        'checkedOut',
    ];
}
