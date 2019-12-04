<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventInstanceSicDivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_instance_sic_division', function (Blueprint $table) {
            $table->unsignedBigInteger('event_instance_id');
            $table->unsignedBigInteger('sic_division_id');

            $table->foreign('event_instance_id')->references('id')->on('event_instances')->onDelete('cascade');
            $table->foreign('sic_division_id')->references('id')->on('sic_divisions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_instance_sic_division');
    }
}
