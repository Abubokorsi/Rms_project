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
        Schema::create('special_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('special_category_id');
            $table->string('title');
            $table->text('sub_title');
            $table->text('details');
            $table->string('image');
            $table->foreign('special_category_id')->references('id')->on('special_categories')->onDelete('cascade');
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
        Schema::dropIfExists('special_items');
    }
};
