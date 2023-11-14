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
        Schema::create('sub_course_likes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('subCourseId')->nullable(false);
            $table->integer('userLike');
            $table->string('DeviceId')->nullable();
            $table->timestamps();
            $table->index('subCourseId');
            $table->foreign('subCourseId')->references('id')->on('subcourses')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_course_likes');
    }
};
