<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ForFom extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email_address',
        'password',
        'phone_number',
    ];
}
