<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->String('category');
        });

        DB::table('categories')->insert(array('id'=>'1', 'category'=>'Frutas'));
        DB::table('categories')->insert(array('id'=>'2', 'category'=>'Verduras'));
        DB::table('categories')->insert(array('id'=>'3', 'category'=>'Carnes'));
        DB::table('categories')->insert(array('id'=>'4', 'category'=>'Procesados'));
        DB::table('categories')->insert(array('id'=>'5', 'category'=>'Enlatados'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
