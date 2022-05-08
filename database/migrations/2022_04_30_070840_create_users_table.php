<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('pseudo');
            $table->string('email')->unique();
            $table->date('date');
            $table->string('adresse');
            $table->string('img');
            $table->string('sexe');
            $table->string('password');

            $table->unsignedBigInteger('id_article');
            $table->foreign('id_article')->references('id_article')->on('articles');

            $table->unsignedBigInteger('id_commentaire');
            $table->foreign('id_commentaire')->references('id_commentaire')->on('commentaires');

            $table->unsignedBigInteger('id_commande');
            $table->foreign('id_commande')->references('id_commande')->on('commandes');

            $table->unsignedBigInteger('id_adresse');
            $table->foreign('id_adresse')->references('id_adresse')->on('adresses');

            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role')->references('id_role')->on('roles');

            $table->unsignedBigInteger('id_message');
            $table->foreign('id_message')->references('id_message')->on('messages');

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
        Schema::dropIfExists('users');
    }
}
