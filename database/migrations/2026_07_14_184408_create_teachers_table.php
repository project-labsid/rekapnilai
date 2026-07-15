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
        Schema::create('teachers', function (Blueprint $table) {

            $table->id();

            $table->string('nip')->unique()->nullable();

            $table->string('nuptk')->unique()->nullable();

            $table->string('name');

            $table->enum('gender', ['L', 'P']);

            $table->string('birth_place')->nullable();

            $table->date('birth_date')->nullable();

            $table->text('address')->nullable();

            $table->string('phone')->nullable();

            $table->string('email')->nullable()->unique();

            $table->string('photo')->nullable();

            $table->string('position')->nullable();

            $table->string('education')->nullable();

            $table->date('join_date')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};