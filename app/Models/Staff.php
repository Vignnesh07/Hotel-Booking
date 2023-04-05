<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Staff extends Model
{
    use Notifiable;
    protected $fillable = ['name', 'email', 'authority','password', 'conf_password', 'salary','address','zipCode','phone'];
    protected $hidden = ['password', 'conf_password','remember_token'];
}