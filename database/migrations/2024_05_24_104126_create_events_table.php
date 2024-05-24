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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('city',100);
            $table->string('address',200);
            $table->decimal('ticket_price', 5,2)->unsigned();
            $table->date('date_start_event');
            $table->date('date_end_event');
            $table->boolean('open_reservation');
            $table->string('event_logo',255);
            $table->text('overview');
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
        Schema::dropIfExists('events');
    }
};
