<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {

            $table->id();

            $table->string('nis')->unique();
            $table->string('nisn')->unique();

            $table->string('name');

            $table->enum('gender', ['L', 'P']);

            $table->string('birth_place');

            $table->date('birth_date');

            $table->text('address')->nullable();

            $table->string('religion')->nullable();

            $table->string('phone')->nullable();

            $table->string('email')->nullable();

            $table->string('photo')->nullable();

            $table->foreignId('class_room_id')
                ->nullable()
                ->constrained('class_rooms')
                ->nullOnDelete();

            $table->foreignId('guardian_id')
                ->nullable()
                ->constrained('guardians')
                ->nullOnDelete();

            $table->year('entry_year');

            $table->enum('status', [
                'Aktif',
                'Pindah',
                'Lulus',
                'Keluar'
            ])->default('Aktif');

            $table->timestamps();

            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};