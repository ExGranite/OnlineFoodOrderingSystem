<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('contents')->nullable();
            $table->string('price')->nullable();
            $table->string('status')->default(0);
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('userid')->nullable();
            $table->string('card')->nullable();
            $table->string('date')->nullable();
            $table->string('ccv')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
