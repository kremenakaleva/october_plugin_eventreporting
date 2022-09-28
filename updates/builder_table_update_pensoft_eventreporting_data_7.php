<?php namespace Pensoft\EventReporting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftEventreportingData7 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_eventreporting_data', function($table)
        {
            $table->smallInteger('is_internal')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_eventreporting_data', function($table)
        {
            $table->dropColumn('is_internal');
        });
    }
}
