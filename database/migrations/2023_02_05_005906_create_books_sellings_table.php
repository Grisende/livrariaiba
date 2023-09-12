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
        Schema::create('books_sellings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id');
            $table->integer('selling_id');
            $table->timestamp('created_at')->default((new DateTime('now'))->format(DATE_ATOM));
            $table->timestamp('updated_at')->default((new DateTime('now'))->format(DATE_ATOM));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_sellings');
    }
};
