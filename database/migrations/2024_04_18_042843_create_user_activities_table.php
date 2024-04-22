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
        Schema::create('user_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('activity');
            $table->string('resource')->nullable();
            $table->string('table')->nullable();
            $table->string('user_name')->nullable(); // Tambahkan kolom nama pengguna
            $table->timestamp('performed_at')->nullable(); // Tambahkan kolom waktu aktivitas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_activities');
    }
};
