<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->text('advantage');
            $table->text('factors');
            $table->text('composition');
            $table->text('work');
            $table->text('manual');
            $table->text('dopinfo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function($table) {
            $table->dropColumn('advantage');
            $table->dropColumn('factors');
            $table->dropColumn('composition');
            $table->dropColumn('work');
            $table->dropColumn('manual');
            $table->dropColumn('dopinfo');

        });
    }

}
