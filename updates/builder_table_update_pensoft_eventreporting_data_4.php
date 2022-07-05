<?php namespace Pensoft\EventReporting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftEventreportingData4 extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('pensoft_eventreporting_data', 'event_end')) {
            Schema::table('pensoft_eventreporting_data', function ($table) {
                $table->dateTime('event_end')->useCurrent();
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('pensoft_eventreporting_data', 'event_end')) {
            Schema::table('pensoft_eventreporting_data', function ($table) {
                $table->dropColumn('event_end');
            });
        }
    }
}
