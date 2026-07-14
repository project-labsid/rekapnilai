<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guardian extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'father_name',
        'father_nik',
        'father_job',
        'father_phone',

        'mother_name',
        'mother_nik',
        'mother_job',
        'mother_phone',

        'guardian_name',
        'guardian_job',
        'guardian_phone',

        'address',
        'email',
        'is_active'

    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}