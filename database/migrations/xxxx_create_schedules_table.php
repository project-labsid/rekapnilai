<?php
Schema::create('schedules', function (Blueprint $table) {

    $table->id();

    $table->foreignId('academic_year_id')->constrained()->cascadeOnDelete();

    $table->foreignId('semester_id')->constrained()->cascadeOnDelete();

    $table->foreignId('class_room_id')->constrained()->cascadeOnDelete();

    $table->foreignId('teacher_id')->constrained()->cascadeOnDelete();

    $table->foreignId('subject_id')->constrained()->cascadeOnDelete();

    $table->enum('day',[
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    ]);

    $table->time('start_time');

    $table->time('end_time');

    $table->string('room')->nullable();

    $table->boolean('is_active')->default(true);

    $table->timestamps();

    $table->softDeletes();

});
class Schedule extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'academic_year_id',

        'semester_id',

        'class_room_id',

        'teacher_id',

        'subject_id',

        'day',

        'start_time',

        'end_time',

        'room',

        'is_active'

    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function classroom()
    {
        return $this->belongsTo(ClassRoom::class,'class_room_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class);
    }
}
public function rules(): array
{
    return [

        'academic_year_id'=>'required',

        'semester_id'=>'required',

        'class_room_id'=>'required',

        'teacher_id'=>'required',

        'subject_id'=>'required',

        'day'=>'required',

        'start_time'=>'required',

        'end_time'=>'required|after:start_time'

    ];
}
use App\Http\Controllers\ScheduleController;

Route::resource('schedules', ScheduleController::class);
