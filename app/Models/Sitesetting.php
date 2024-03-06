<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitesetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'Title',
        'Description',
        'Canonical',
        'address',
        'email',
        'phone',
        'contactusemail',
        'FaceBook',
        'Twiter',
        'Instagram',
        'Youtube',
        'timing'
    ];
}
