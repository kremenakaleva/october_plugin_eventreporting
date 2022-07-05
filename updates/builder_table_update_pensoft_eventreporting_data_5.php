<?php namespace Pensoft\EventReporting\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePensoftEventreportingData5 extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('pensoft_eventreporting_data', 'event_start')) {
            Schema::table('pensoft_eventreporting_data', function ($table) {
                $table->dateTime('event_start')->useCurrent();
                $table->string('website', 255)->nullable()->change();
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('pensoft_eventreporting_data', 'event_start')) {
            Schema::table('pensoft_eventreporting_data', function ($table) {
                $table->dropColumn('event_start');
                $table->string('website', 255)->nullable(false)->change();
            });
        }
    }

}
