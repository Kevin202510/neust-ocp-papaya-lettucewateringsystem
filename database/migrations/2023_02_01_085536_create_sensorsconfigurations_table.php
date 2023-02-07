<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorsconfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensorsconfigurations', function (Blueprint $table) {
            $table->id();
            $table->string("configuration_name");
            $table->string("mushroom_image")->default("bg4.jpg");
            $table->json("configuration_value")->comment("Preset Value For Sensors");
            $table->integer("isActive")->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensorsconfigurations');
    }
}
