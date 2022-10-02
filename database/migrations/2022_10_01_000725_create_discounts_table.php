<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->unsignedInteger('priority')->default(0);
            $table->boolean('active')->default(0);
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('access_type_code', 1);
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            
            $table->foreign('access_type_code', 'discounts_access_type_code_foreign')->references('code')->on('access_types');
            $table->foreign('brand_id', 'discounts_brand_id_foreign')->references('id')->on('brands');
            $table->foreign('region_id', 'discounts_region_id_foreign')->references('id')->on('regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discounts');
    }
}
