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

        Schema::create('testemonial',function(Blueprint $table){

            $table->id();
            $table->string('page_title');
            $table->string('page_description');
            $table->string('client_name');
            $table->string('client_job');
            $table->string('client_image');
            $table->string('client_comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('testemonial');
    }
};
