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
        Schema::create('subcourses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('courseCategory')->nullable(false);
            $table->string('mainTitle')->unique();
            $table->string('SubCourseEndLink')->unique();
            $table->string('courseThumbnail');
            $table->text('courseIntro');
            $table->text('courseDescription');
            $table->enum('courseAccess',['Free','Subscriber','Payment'])->default('Free');
            $table->enum('coursePublishment',['Pending','Released','Deleted'])->default('Pending');
            $table->timestamps();
            $table->softDeletes();
            $table->index('courseCategory');
            $table->foreign('courseCategory')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcourses');
    }
};
