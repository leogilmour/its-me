<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewPartyFieldsForPartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parties', function (Blueprint $table) {
            $table->time('time')->nullable();
            $table->string('tagline')->nullable();
            $table->string('host')->nullable();
            $table->string('dress_code')->nullable();
            $table->string('first_address')->nullable();
            $table->string('second_address')->nullable();
            $table->string('city')->nullable();
            $table->string('county')->nullable();
            $table->string('postcode')->nullable();
            $table->string('details')->nullable();
            $table->date('deadline')->nullable();
            $table->string('passcode')->nullable();
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
            $table->dropColumn('time');
            $table->dropColumn('tagline');
            $table->dropColumn('host');
            $table->dropColumn('dress_code');
            $table->dropColumn('first_address');
            $table->dropColumn('second_address');
            $table->dropColumn('city');
            $table->dropColumn('county');
            $table->dropColumn('postcode');
            $table->dropColumn('details');
            $table->dropColumn('deadline');
            $table->dropColumn('passcode');
        });
    }
}