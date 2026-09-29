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
        Schema::create('video_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')->references(column: 'id')->on(table: 'users')
            ->onDelete(action: 'cascade');
            $table->foreignId(column: 'video_id')->references(column: 'id')->on(table: 'videos')
            ->onDelete(action: 'cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_user');
    }
};
