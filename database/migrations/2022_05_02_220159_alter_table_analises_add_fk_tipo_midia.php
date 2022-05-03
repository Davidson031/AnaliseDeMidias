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
        //
        Schema::table('analises', function (Blueprint $table) {
            $table->unsignedBigInteger('tipo_midias_id');
        });



        Schema::table('analises', function (Blueprint $table) { 
            $table->foreign('tipo_midias_id')->references('id')->on('tipo_midias'); 
        });
    
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('analises', function (Blueprint $table) {
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
            $table->dropForeign('analises_tipo_midias_id_foreign');
        });    
    
        Schema::table('analises', function (Blueprint $table) {
            $table->dropColumn('tipo_midias_id');
            
        });
    }
};
