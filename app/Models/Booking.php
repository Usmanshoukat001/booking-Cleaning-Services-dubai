<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'sname',
        'Duration',
        'NoP',
        'Material',
        'Frequency',
        'Date',
        'StartTime',
        'ADDRESS',
        'Total',
        'paymentgatway',
        'paymentdetails',
        'status',
        'extra',
        'buildingType',
        'user_id'
    ];

}
