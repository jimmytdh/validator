<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccinations', function (Blueprint $table) {
            $table->id();
            $table->integer('person_id');
            $table->date('vaccination_date')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('batch_no')->nullable();
            $table->string('lot_no')->nullable();
            $table->string('vaccinator')->nullable();
            $table->string('dose1')->nullable();
            $table->string('dose2')->nullable();
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
        Schema::dropIfExists('vaccinations');
    }
}
