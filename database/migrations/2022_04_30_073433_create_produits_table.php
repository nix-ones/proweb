<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id_produit');
            $table->string('titre');
            $table->integer('prix');
            $table->text('desc');
            $table->float('qtiteproduit');
            $table->string('img');


            $table->unsignedBigInteger('id_categorie');
            $table->foreign('id_categorie')->references('id_categorie')->on('categories');


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
        Schema::dropIfExists('produits');
    }

}
