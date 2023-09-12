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
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->double('selling_price', 8, 2)->nullable();
            $table->integer('quantity');
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
        Schema::dropIfExists('books');
    }
};
