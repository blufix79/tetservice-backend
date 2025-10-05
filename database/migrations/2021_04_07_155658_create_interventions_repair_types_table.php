<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionsRepairTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions_repair_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('intervention_id');
            $table->foreign('intervention_id')
                ->references('id')
                ->on('interventions')->onDelete('cascade');

            $table->unsignedBigInteger('repair_type_id');
            $table->foreign('repair_type_id')
                ->references('id')
                ->on('repair_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interventions_repair_types');
    }
}
