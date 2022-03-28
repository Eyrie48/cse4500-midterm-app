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
        Schema::create('hardwares', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('hardware_id');
            //$table->foreignId('hardware_id')->references('id')->on('userinfos')->onUpdate('cascade');
            $table->foreignId('userinfo_id')->nullable()->constrained('userinfos')->onUpdate('cascade')->onDelete('cascade');
            $table->string('invoice')->nullable();
            $table->string('device_name')->nullable();
            $table->float('cpu')->nullable();
            $table->string('price', $precision = 8, $scale = 2)->nullable();
            $table->DateTime('purchaseDate')->nullable();
            $table->float('ram')->nullable();
            $table->float('storage')->nullable();
            
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
        Schema::dropIfExists('hardwares');
    }
};
