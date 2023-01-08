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
            $table->string('Razon_Social');
            $table->string('nombre_comercial');
            $table->integer('numero_de_colaboradores');
            $table->string('direccion');
            $table->string('Provincia');
            $table->string('canton');
            $table->string('parroquia');
            $table->integer('telefono_contacto');
            $table->string('gerente_formacion_educacional');
            $table->string('titular_representante');
            $table->string('correo_electronico');
            $table->string('genero_representate');
            //Actividad Comercial y Categorias
            $table->string('logo')->nullable();//Opcional
            $table->string('imagen_logo')->nullable();//Opcional 
            $table->string('numero_de_establecimiento');
            $table->date('fecha_inicio_negocio');
            $table->string('categoria');
            $table->string('producto_severcios_detalle');
            $table->string('producto_severcios');
            $table->string('producto_comercio_justo');
            $table->string('comercio_exterior');
            //Localicacion georeferencia
            $table->string('coordenadas')->nullable();//Opcional 
            $table->string('imagen_lugar');
            //Informcaion Tecnologica
            $table->string('comercio_electronico')->nullable();//Opcional 
            $table->string('requiere_capacitacion')->nullable();//Opcional 
            $table->string('pagina_web')->nullable();//Opcional 
            $table->string('redes_sociales')->nullable();//Opcional 
            $table->string('whatsapp')->nullable();//Opcional 

           
            
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
