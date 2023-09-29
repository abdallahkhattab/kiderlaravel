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
        Schema::create('school_class', function (Blueprint $table) {
            $table->id();
            $table->string('class_page_title');
            $table->text('class_page_description');
            $table->string('class_image');
            $table->string('class_title');
            $table->string('class_teacher_name');
            $table->text('class_teacher_description');
            $table->string('class_teacher_image');
            $table->string('class_price');
            $table->string('class_time');
            $table->string('class_age');
            $table->string('class_capacity');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropDatabaseIfExists('school_class');
    }
};
