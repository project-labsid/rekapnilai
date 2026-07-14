<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicYear extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'is_active',
        'description'
    ];

    public function semesters()
    {
        return $this->hasMany(Semester::class);
    }
}
public function rules(): array
{
    return [

        'name' => 'required|unique:academic_years,name',

        'start_date' => 'required|date',

        'end_date' => 'required|date|after:start_date',

        'is_active' => 'nullable|boolean',

    ];
}
use App\Http\Controllers\AcademicYearController;
Route::resource('academic-years', AcademicYearController::class);
