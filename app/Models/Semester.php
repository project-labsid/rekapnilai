<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Semester extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'academic_year_id',

        'name',

        'order',

        'start_date',

        'end_date',

        'is_active'

    ];

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }
}
public function rules(): array
{
    return [

        'academic_year_id' => 'required|exists:academic_years,id',

        'name' => 'required|in:Ganjil,Genap',

        'order' => 'required|in:1,2',

        'start_date' => 'required|date',

        'end_date' => 'required|date|after:start_date',

    ];
}
use App\Http\Controllers\SemesterController;

Route::resource('semesters', SemesterController::class);
