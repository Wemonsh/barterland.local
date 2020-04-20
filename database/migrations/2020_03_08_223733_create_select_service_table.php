<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('select_service', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('service_id')->unsigned()->index();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->bigInteger('select_id')->unsigned()->index();
            $table->foreign('select_id')->references('id')->on('selects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('select_service');
    }
}
