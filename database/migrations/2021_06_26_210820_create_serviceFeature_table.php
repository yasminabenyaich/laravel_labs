<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceFeatures', function (Blueprint $table) {
        $table->id();
        $table->string('img')->nullable();
        $table->foreignId('icone_id')->constrained('icones');
        $table->string('h3');
        $table->text('p');
        $table->string('btn')->nullable();
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
        Schema::dropIfExists('serviceFeatures');
    }
}
