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
        Schema::create('votant_scrutins', function (Blueprint $table) {
            $table->id();
            $table->integer('votant_id');
            $table->integer('scrutin_id');
            $table->boolean('a_vote')->default(false);
            $table->boolean('candidat')->default(false);
            $table->integer('nb_votes')->nullable()->default(null);
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
        Schema::dropIfExists('votant_scrutins');
    }
};
