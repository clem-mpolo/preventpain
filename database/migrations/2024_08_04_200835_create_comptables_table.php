<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptables', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet');
            $table->string('fonction');
            $table->string('nbr_enfant');
            $table->string('categorie');
            $table->string('jour');
            $table->string('taux');
            $table->string('montant');
            $table->string('decompte_final');
            $table->string('bonus');
            $table->string('prime');
            $table->string('frais_scolarite');
            $table->string('heure_supplementaire');
            $table->string('trezieme_mois');
            $table->string('avantage_nature');
            $table->string('alocation_familial');
            $table->string('logement');
            $table->string('transport');
            $table->string('salaire_brut_imposable');
            $table->string('ipr');
            $table->string('cnss_qpo');
            $table->string('total_retenues');
            $table->string('autre_deduction');
            $table->string('avance_salaire');
            $table->string('net_a_payer');

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
        Schema::dropIfExists('comptables');
    }
};
