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
        //
        Schema::create('popular_teacher', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('page_description');
            $table->string('teacher_name');
            $table->string('teacher_job');
            $table->string('teacher_image');
            $table->text('teacher_facebook');
            $table->timestamps();
        });
     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
