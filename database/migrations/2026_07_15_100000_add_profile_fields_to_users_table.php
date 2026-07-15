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
        Schema::table('users', function (Blueprint $table) {

            if (!Schema::hasColumn('users', 'username')) {
                $table->string('username')->unique()->after('id');
            }

            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->nullable()->after('email');
            }

            if (!Schema::hasColumn('users', 'photo')) {
                $table->string('photo')->nullable()->after('phone');
            }

            if (!Schema::hasColumn('users', 'is_active')) {
                $table->boolean('is_active')->default(true)->after('photo');
            }

            if (!Schema::hasColumn('users', 'last_login_at')) {
                $table->timestamp('last_login_at')
                      ->nullable()
                      ->after('remember_token');
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $columns = [];

            if (Schema::hasColumn('users', 'username')) {
                $columns[] = 'username';
            }

            if (Schema::hasColumn('users', 'phone')) {
                $columns[] = 'phone';
            }

            if (Schema::hasColumn('users', 'photo')) {
                $columns[] = 'photo';
            }

            if (Schema::hasColumn('users', 'is_active')) {
                $columns[] = 'is_active';
            }

            if (Schema::hasColumn('users', 'last_login_at')) {
                $columns[] = 'last_login_at';
            }

            if (!empty($columns)) {
                $table->dropColumn($columns);
            }

        });
    }
};
