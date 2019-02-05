<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtraFieldsForGuestsAndPartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parties', function (Blueprint $table) {
            $table->binary('visible_guestlist')->nullable();
        });
        Schema::table('guests', function (Blueprint $table) {
            $table->string('allergies')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parties', function (Blueprint $table) {
            $table->dropColumn('visible_guestlist');
        });
        Schema::table('guests', function (Blueprint $table) {
            $table->dropColumn('allergies');
        });
    }
}
