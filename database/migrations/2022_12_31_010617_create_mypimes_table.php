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
            $table->id();
            $table->string('ruc')->unique();
            $table->string('Provincia');
            $table->string('Razon_Social');
            $table->string('canton');
            $table->string('nombre_comercial');
            $table->string('parroquia');
            $table->string('numcolaboradoes');
            $table->integer('telefono_contacto');
            $table->string('gerente_formacion_educacional');
            $table->string('titular_representante');
            $table->string('direccion');
            $table->string('genero_representate');
            $table->timestamp('email_verified_at');
            $table->string('numero_de_establecimiento');
            $table->date('fecha_inicion');
            $table->string('categoria');
            //
            //
            $table->string('coordenadas');
            $table->string('logo');
            //$table->string('imagen');
            $table->string('comercio_electronico')->nullable();
            $table->string('requiere_capacitacion');
            $table->string('pagina_web');
            $table->string('redes_sociales');
            $table->integer ('whatsapp');
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
