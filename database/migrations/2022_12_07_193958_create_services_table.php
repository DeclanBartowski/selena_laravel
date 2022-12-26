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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('active')->default(true);
            $table->integer('sort')->default(500);
            $table->string('name');
            $table->string('code')->unique();
            $table->json('services')->nullable();
            $table->string('preview_picture')->nullable();
            $table->text('preview_content')->nullable();
            $table->string('detail_picture')->nullable();
            $table->text('detail_content')->nullable();
            $table->string('main_picture')->nullable();
            $table->text('main_content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
