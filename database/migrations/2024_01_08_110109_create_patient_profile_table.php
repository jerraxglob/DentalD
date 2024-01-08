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
        Schema::create('patient_profile', function (Blueprint $table) {
            $table->id();
            $table->string('Factor');
            $table->text('information');
            $table->string('Potential_problems');
            $table->integer('Weighting');
            $table->text('Important_components');
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
        Schema::dropIfExists('patient_profile');
    }
};
