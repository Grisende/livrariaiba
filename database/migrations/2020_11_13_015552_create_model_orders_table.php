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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id');
            $table->string('title');
            $table->integer('quantity');
            $table->string('customer_name');
            $table->string('status');
            $table->string('obs')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
