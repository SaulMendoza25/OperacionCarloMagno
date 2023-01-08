<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMypimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mypimes', function (Blueprint $table) {
            $table->id(); //id se genera automaticamente
            //Datos Generales
            $table->integer('RUC')->unique();
            $table->string('Business_name');
            $table->string('Trade_name');
            $table->integer('Number_of_collaborators');
            $table->string('Formation_of_manager');
            $table->string('Address');
            $table->string('E_mail_address');

            $table->string('Province');
            $table->string('County');
            $table->string('Parish');
            $table->integer('Contact_telephone_number');
            $table->string('Owner_Legal_representative');
            $table->string('Gender_Representative');
            //Actividad Comercial y Categorias
            $table->string('logo')->nullable();//Opcional
            $table->string('up_image_logo')->nullable();//Opcional 
            $table->string('Number_of_establishments');
            $table->date('Business_start_date');
            $table->string('Category');
            //$table->string('producto_severcios_detalle');
            $table->string('Products_or_services_details');
            $table->string('Fair_trade_products');
            $table->string('Foreign_trade');
            //Localicacion georeferencia
            $table->string('Coordinates')->nullable();//Opcional 
            $table->string('image')->nullable();
            //Informcaion Tecnologica
            $table->string('E_commerce')->nullable();//Opcional 
            $table->string('Requires_training')->nullable();//Opcional 
            $table->string('Web_page')->nullable();//Opcional 
            $table->string('social_media')->nullable();//Opcional 
            $table->string('Whatsapp')->nullable();//Opcional 

           
            
            //
            //
            $table->rememberToken();
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
        Schema::dropIfExists('mypimes');
    }
}
