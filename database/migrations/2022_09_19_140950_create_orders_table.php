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
            $table->id();
            $table->string('no_order', 255);
            $table->date('date_achat')->nullable()->default(null);
            $table->foreignId(column: 'cards_id')->constrained(table: 'cards')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId(column: 'users_id')->constrained(table: 'users')->onUpdate('cascade')->onDelete('cascade');


            // $table->timestamps();
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