<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CapRoomStyleEventInstanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cap_room_style_event_instance', function (Blueprint $table) {
            $table->unsignedBigInteger('event_instance_id');
            $table->unsignedBigInteger('cap_room_style_id');

            $table->foreign('event_instance_id')->references('id')->on('event_instances')->onDelete('cascade');
            $table->foreign('cap_room_style_id')->references('id')->on('cap_room_styles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
