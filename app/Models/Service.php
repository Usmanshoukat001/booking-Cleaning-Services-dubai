<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'servicename',
        'pjson',
        'Duration',
        'nofProfessionals',
        'Material',
        'MaterialCharges',
        'VAT',
        'PRICE',
    ];
}
