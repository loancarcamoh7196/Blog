<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');

            /*Agregamos tiutlo, cuerpo, id categoria, id usuario */
            $table-> string('title');
            $table-> text('content');
            /*unsigned*/
            $table-> integer('user_id')->unsigned();
            $table-> integer('category_id')->unsigned();
            $table->timestamps();


             /*Declaramos clave foranea*/
            /*var       comando    var_tabla_foranea  id_tb_fk    nom_tb_fk         tipo relación entre los registros*/
            $table -> foreign('user_id')-> references('id')->on('users')->onDelete('cascade');
            $table -> foreign('category_id')-> references('id')-> on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
