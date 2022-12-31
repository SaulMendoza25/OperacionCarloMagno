<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprendimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprendimientos', function (Blueprint $table) {
            $table->id();
            $table->string('name_proyect')->nullable();
            $table->string('name_property')->nullable();
            $table->string('addresses')->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('require_trainings');
            $table->string('upload_proyect');
            $table->string('logo');
            $table->string('main_products')->nullable();
            $table->string('main_service')->nullable();
            $table->string('main_investment_source')->nullable();
            $table->string('principal_investment_range')->nullable();
            $table->string('number_employees')->nullable();
            $table->string('up_image_logo');
            $table->string('up_image_main_products');
            $table->string('up_image_main_mark');
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
        Schema::dropIfExists('emprendimientos');
    }
}
