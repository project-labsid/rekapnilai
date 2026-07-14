<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

public function up(): void
{
    Schema::create('teachers', function (Blueprint $table) {
        $table->id();

        $table->foreignId('user_id')
              ->nullable()
              ->constrained()
              ->nullOnDelete();

        $table->string('nip')->unique();
        $table->string('nuptk')->nullable()->unique();
        $table->string('name');
        $table->enum('gender', ['L', 'P']);
        $table->string('birth_place');
        $table->date('birth_date');
        $table->text('address')->nullable();
        $table->string('phone')->nullable();
        $table->string('email')->nullable();
        $table->string('photo')->nullable();
        $table->boolean('is_active')->default(true);

        $table->timestamps();
        $table->softDeletes();
    });
}