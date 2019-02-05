<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePartiesTableDetailsField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parties', function (Blueprint $table) {
            $table->dropColumn('details');
            $table->text('description')->nullable();
            $table->string('template')->nullable();
            $table->binary('tickets')->nullable();
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
            $table->string('details');
            $table->dropColumn('description');
            $table->dropColumn('template');
            $table->dropColumn('tickets');
        });
    }
}
