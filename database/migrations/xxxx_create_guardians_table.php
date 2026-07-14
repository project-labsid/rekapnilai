<?php 

Schema::create('guardians', function (Blueprint $table) {

    $table->id();

    $table->string('father_name');
    $table->string('father_nik')->nullable();
    $table->string('father_job')->nullable();
    $table->string('father_phone')->nullable();

    $table->string('mother_name');
    $table->string('mother_nik')->nullable();
    $table->string('mother_job')->nullable();
    $table->string('mother_phone')->nullable();

    $table->string('guardian_name')->nullable();
    $table->string('guardian_job')->nullable();
    $table->string('guardian_phone')->nullable();

    $table->text('address')->nullable();

    $table->string('email')->nullable();

    $table->boolean('is_active')->default(true);

    $table->timestamps();

    $table->softDeletes();
});