<?php namespace Pensoft\EventReporting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftEventreportingData2 extends Migration
{
    public function up()
    {
        Schema::table('pensoft_eventreporting_data', function($table)
        {
            $table->dateTime('event_end');
            $table->dateTime('event_date')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('website', 255)->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('pensoft_eventreporting_data', function($table)
        {
            $table->dropColumn('event_end');
            $table->date('event_date')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->string('website', 255)->nullable()->change();
        });
    }
}
