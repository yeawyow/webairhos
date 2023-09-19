<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offsite_activities_dashboards', function (Blueprint $table) {
            $table->id('osa_id');
            $table->string('osa_title');
            $table->string('osa_content');
            $table->string('osa_image');
            $table->string('osa_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offsite_activities_dashboards');
    }
};
