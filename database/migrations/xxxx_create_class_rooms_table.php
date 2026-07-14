<?php
Schema::create('class_rooms', function (Blueprint $table) {

    $table->id();

    $table->string('name'); // 1A, 2B

    $table->unsignedTinyInteger('grade'); // 1-6

    $table->string('academic_year');

    $table->foreignId('teacher_id')
          ->nullable()
          ->constrained('teachers')
          ->nullOnDelete();

    $table->integer('capacity')->default(30);

    $table->boolean('is_active')->default(true);

    $table->timestamps();

    $table->softDeletes();

});
class ClassRoom extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'name',

        'grade',

        'academic_year',

        'teacher_id',

        'capacity',

        'is_active'

    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
