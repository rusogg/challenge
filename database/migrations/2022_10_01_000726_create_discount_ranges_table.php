<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_ranges', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('from_days');
            $table->unsignedInteger('to_days');
            $table->double('discount')->nullable();
            $table->string('code', 15)->nullable();
            $table->unsignedBigInteger('discount_id');
            $table->timestamps();
            
            $table->foreign('discount_id', 'discount_ranges_discount_id_foreign')->references('id')->on('discounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discount_ranges');
    }
}
