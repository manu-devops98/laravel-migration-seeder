<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            // Azienda
            $table->string('agency', 150);
            // Stazione di partenza
            $table->string('departure', 150);
            // Stazione di arrivo
            $table->string('arrival', 150);
            // Orario di partenza
            $table->string('departure_time', 10);
            // Orario di arrivo
            $table->string('arrival_time', 10);
            // Codice Treno
            $table->string('code', 12);
            // Numero Carrozze
            $table->integer('carriage');
            // In orario
            $table->boolean('in_time');
            // Cancellato
            $table->boolean('deleted');

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
        Schema::dropIfExists('trains');
    }
}
