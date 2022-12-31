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
            $table->string('name_proyect');
            $table->string('name_property');
            $table->string('addresses');
            $table->integer('phone_number');
            $table->string('email');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('require_trainings')->nullable();
            $table->string('theme_require_trainings')->nullable();
            $table->string('upload_proyect')->nullable();
            $table->string('logo')->nullable();
            $table->string('main_products');
            $table->string('main_service');
            $table->string('main_investment_source');
            $table->string('principal_investment_range');
            $table->integer('number_employees');
            $table->string('up_image_logo')->nullable();
            $table->string('up_image_main_products')->nullable();
            $table->string('up_image_main_mark')->nullable();
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
