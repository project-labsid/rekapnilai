<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'nip',
        'nuptk',
        'name',
        'gender',
        'birth_place',
        'birth_date',
        'address',
        'phone',
        'email',
        'photo',
        'is_active',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
public function classRooms()
{
    return $this->hasMany(ClassRoom::class);
}