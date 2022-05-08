<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigIncrements('id_commande');
            $table->float('total');
            $table->integer('qtite');
            $table->float('prixUnitaire');

            $table->unsignedBigInteger('id_produit');
            $table->foreign('id_produit')->references('id_produit')->on('produits');

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
        Schema::dropIfExists('commandes');
    }
}
