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
    Schema::create('schools', function (Blueprint $table) {

        $table->id();

        $table->string('name');
        $table->string('npsn')->nullable();
        $table->string('nss')->nullable();

        $table->enum('level',['SD','MI']);

        $table->enum('status',['Negeri','Swasta']);

        $table->string('accreditation')->nullable();

        $table->text('address')->nullable();

        $table->string('province')->nullable();
        $table->string('city')->nullable();
        $table->string('district')->nullable();
        $table->string('village')->nullable();

        $table->string('postal_code')->nullable();

        $table->string('phone')->nullable();

        $table->string('whatsapp')->nullable();

        $table->string('email')->nullable();

        $table->string('website')->nullable();

        $table->string('logo')->nullable();

        $table->string('favicon')->nullable();

        $table->string('principal_name')->nullable();

        $table->string('principal_nip')->nullable();

        $table->string('operator_name')->nullable();

        $table->string('operator_nip')->nullable();

        $table->year('established_year')->nullable();

        $table->decimal('latitude',10,7)->nullable();

        $table->decimal('longitude',10,7)->nullable();

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
