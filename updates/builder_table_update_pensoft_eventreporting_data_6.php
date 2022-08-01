<?php namespace Pensoft\EventReporting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftEventreportingData6 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_eventreporting_data', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('surname');
            $table->dropColumn('affiliation');
            $table->dropColumn('email');
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_eventreporting_data', function($table)
        {
            $table->string('name', 255);
            $table->string('surname', 255);
            $table->string('affiliation', 255);
            $table->string('email', 255);
        });
    }
}
