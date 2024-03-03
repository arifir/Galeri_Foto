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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('judul_photo');
            $table->text('deskripsi');
            $table->string('url');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_categories');
            $table->unsignedBigInteger('id_album')->nullable();
            $table->unsignedBigInteger('id_like')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
};