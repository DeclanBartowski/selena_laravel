<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabinets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('children_area_value')->nullable();
            $table->string('children_area_description')->nullable();
            $table->string('cabinet_value')->nullable();
            $table->string('cabinet_description')->nullable();
            $table->string('session_value')->nullable();
            $table->string('session_description')->nullable();
            $table->json('photo')->nullable();
            $table->text('preview')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cabinets');
    }
};
