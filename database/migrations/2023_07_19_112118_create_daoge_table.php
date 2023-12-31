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
        Schema::create('daoge', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->foreignId('album_id')->nullable()->constrained('album');
            $table->integer('lagu')->nullable();
            $table->integer('teks')->nullable();
            $table->string('user_add', 100)->nullable();
            $table->string('user_update', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daoge');
    }
};
