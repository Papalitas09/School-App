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
            $table->id(); // Kolom ID, Primary Key, Auto-Increment
            $table->string('nis')->unique(); 
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->enum('gender', ['L', 'P']); // Jenis Kelamin
            $table->text('alamat')->nullable(); // Alamat, bisa
            $table->string('email')->unique();
            $table->timestamps(); // Kolom created_at dan updated_a
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
