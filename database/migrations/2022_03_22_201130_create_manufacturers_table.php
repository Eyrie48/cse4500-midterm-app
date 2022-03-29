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
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id('manufacturer_id');
            //$table->string('manufacturer_id')->nullable();
            $table->string('sales_name')->nullable();
            $table->string('sales_email')->nullable();
            $table->string('tech_name')->nullable();
            $table->string('tech_email')->nullable();
            $table->string('company_name')->nullable();
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
        Schema::dropIfExists('manufacturers');
    }
};
