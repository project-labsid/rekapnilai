<?php
Schema::create('academic_years', function (Blueprint $table) {

    $table->id();

    $table->string('name'); // 2025/2026

    $table->date('start_date');

    $table->date('end_date');

    $table->boolean('is_active')->default(false);

    $table->text('description')->nullable();

    $table->timestamps();

    $table->softDeletes();

});