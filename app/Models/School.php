<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [

        'name',
        'npsn',
        'nss',
        'level',
        'status',
        'accreditation',
        'address',
        'province',
        'city',
        'district',
        'village',
        'postal_code',
        'phone',
        'whatsapp',
        'email',
        'website',
        'logo',
        'favicon',
        'principal_name',
        'principal_nip',
        'operator_name',
        'operator_nip',
        'established_year',
        'latitude',
        'longitude'

    ];
}