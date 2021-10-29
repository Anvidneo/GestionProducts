<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsMeasure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units_measure', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('abbreviation');
        });

        DB::table('units_measure')->insert(array('id'=>'1', 'name'=>'Kilo', 'abbreviation'=>'KG'));
        DB::table('units_measure')->insert(array('id'=>'2', 'name'=>'Libra', 'abbreviation' => 'LB'));
        DB::table('units_measure')->insert(array('id'=>'3', 'name'=>'Unidad', 'abbreviation' => 'UND'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units_measure');
    }
}
