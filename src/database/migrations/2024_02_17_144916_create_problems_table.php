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
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('course_id')->constrained('exam_courses');
            $table->integer('number');
            $table->string('fields', 100);
            $table->string('title', 100);
            $table->string('statement');
            $table->string('correct', 100);
            $table->string('dummy_1', 100);
            $table->string('dummy_2', 100);
            $table->string('dummy_3', 100);
            $table->timestamp('created_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problems');
    }
};
