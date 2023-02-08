<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryComplianceMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_compliance__masters', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('entity_type');
            $table->string('forms');
            $table->string('due_date');
            $table->string('Frequency');
            $table->string('periodend');
            $table->string('complaince_name');
            $table->string('notes');
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
        Schema::dropIfExists('country_compliance__masters');
    }
}
