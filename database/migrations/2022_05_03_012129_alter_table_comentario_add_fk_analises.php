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
        Schema::table('comentarios', function (Blueprint $table) {
            $table->unsignedBigInteger('analises_id');
        });


        Schema::table('comentarios', function (Blueprint $table) { 
            $table->foreign('analises_id')->references('id')->on('analises'); 
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
        Schema::table('comentarios', function (Blueprint $table) {
            $table->dropForeign('analises_tipo_midias_id_foreign');
            $table->dropForeign('comentarios_analises_id_foreign');
        });    
    
        Schema::table('analises', function (Blueprint $table) {
            $table->dropColumn('analises_id');
            
        });

    }
};
