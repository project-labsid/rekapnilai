<?php
Schema::create('subjects', function (Blueprint $table) {

    $table->id();

    $table->string('code')->unique();

    $table->string('name');

    $table->unsignedTinyInteger('grade');

    $table->integer('minimum_score')->default(75);

    $table->boolean('is_active')->default(true);

    $table->timestamps();

    $table->softDeletes();

});
class Subject extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'code',

        'name',

        'grade',

        'minimum_score',

        'is_active'

    ];
}
class Subject extends Model
{
    use SoftDeletes;

    protected $fillable = [

        'code',

        'name',

        'grade',

        'minimum_score',

        'is_active'

    ];
}
Route::resource('subjects', SubjectController::class);
