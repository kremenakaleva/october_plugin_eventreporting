<?php namespace Pensoft\EventReporting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftEventreportingData extends Migration
{
    public function up()
    {
        Schema::table('pensoft_eventreporting_data', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_eventreporting_data', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
