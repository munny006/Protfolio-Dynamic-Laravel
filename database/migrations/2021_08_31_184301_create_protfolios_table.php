<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protfolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
               $table->string('sub_title');
               $table->string('big_img');
                $table->string('small_img');
                 $table->longText('description');
                  $table->string('client');
                  $table->string('category');
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
        Schema::dropIfExists('protfolios');
    }
}
