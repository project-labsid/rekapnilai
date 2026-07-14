<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable=[

        'nis',

        'nisn',

        'name',

        'gender',

        'birth_place',

        'birth_date',

        'address',

        'religion',

        'phone',

        'email',

        'photo',

        'class_room_id',

        'parent_id',

        'entry_year',

        'status'

    ];

    public function classroom()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function parent()
    {
        return $this->belongsTo(ParentModel::class,'parent_id');
    }

}
public function rules(): array
{
    return [

        'nis'=>'required|unique:students',

        'nisn'=>'required|unique:students',

        'name'=>'required',

        'gender'=>'required',

        'birth_place'=>'required',

        'birth_date'=>'required|date',

        'entry_year'=>'required',

    ];
}