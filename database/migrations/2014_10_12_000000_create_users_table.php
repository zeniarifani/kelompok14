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
        Schema::create('users', function (Blueprint $table) {

            $table->id();

            // Regist Informasi Group
            $table->string('nama_group');
            $table->string('confirm_password');//harus sama persis sama pass
            $table->string('pilihan');//binusian atau non binusian      

            // Regist Informasi Leader
            $table->string('full_name');
            $table->integer('no_wa');//minimal 9, harus unik
            $table->string('line_id');//harus unik
            $table->string('github_id');
            $table->string('birth_place');//dropdown menu
            $table->date('birth_date');//bisa input sendiri atau pake kalender
            $table->string('CV');//Format file pdf, jpg, jpeg dan png
            $table->string('flazz_card');//Format file pdf, jpg, jpeg dan png
            $table->string('id_card');//Format file pdf, jpg, jpeg dan png

            //login
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
