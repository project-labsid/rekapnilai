<?php 
Schema::create('students', function (Blueprint $table) {

    $table->id();

    $table->string('nis')->unique();

    $table->string('nisn')->unique();

    $table->string('name');

    $table->enum('gender',['L','P']);

    $table->string('birth_place');

    $table->date('birth_date');

    $table->text('address')->nullable();

    $table->string('religion')->nullable();

    $table->string('phone')->nullable();

    $table->string('email')->nullable();

    $table->string('photo')->nullable();

    $table->unsignedBigInteger('class_room_id')->nullable();

    $table->unsignedBigInteger('parent_id')->nullable();

    $table->year('entry_year');

    $table->enum('status',[
        'Aktif',
        'Pindah',
        'Lulus',
        'Keluar'
    ])->default('Aktif');

    $table->timestamps();

    $table->softDeletes();

});
$table->foreign('class_room_id')
      ->references('id')
      ->on('class_rooms')
      ->nullOnDelete();

$table->foreign('parent_id')
      ->references('id')
      ->on('parents')
      ->nullOnDelete();