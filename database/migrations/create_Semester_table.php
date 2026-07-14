<?php
Schema::create('semesters', function (Blueprint $table) {

    $table->id();

    $table->foreignId('academic_year_id')
          ->constrained()
          ->cascadeOnDelete();

    $table->string('name'); // Ganjil / Genap

    $table->unsignedTinyInteger('order'); // 1 atau 2

    $table->date('start_date');

    $table->date('end_date');

    $table->boolean('is_active')->default(false);

    $table->timestamps();

    $table->softDeletes();

});
