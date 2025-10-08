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
        Schema::table('votants', function (Blueprint $table) {
            $table->string('email')->nullable();
            $table->string('password')->nullable();
        });
        Schema::table('votant_scrutins', function (Blueprint $table) {
            $table->boolean('vote')->nullable();
            $table->dropColumn('a_vote');
            $table->dropColumn('candidat');
            $table->dropColumn('nb_votes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('votants', function (Blueprint $table) {
            $table->dropColumn(['email', 'password']);
        });
        Schema::table('votant_scrutins', function (Blueprint $table) {
            $table->dropColumn('vote');
            $table->boolean('a_vote');
            $table->boolean('candidat');
            $table->integer('nb_votes');
        });
    }
};
