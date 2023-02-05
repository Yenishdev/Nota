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
        Schema::create('music', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('genre_id')->index();
            $table->foreign('genre_id')->references('id')->on('genres')->cascadeOnDelete();
            $table->unsignedBigInteger('singer_id')->index();
            $table->foreign('singer_id')->references('id')->on('singers')->cascadeOnDelete();
            $table->unsignedInteger('favorites')->default(0);
            $table->unsignedInteger('viewed')->default(0);
            $table->unsignedFloat('duration');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music');
    }
};
