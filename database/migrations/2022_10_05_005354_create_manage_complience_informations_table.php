<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageComplienceInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_complience_informations', function (Blueprint $table) {
            $table->id();
            $table->string('frequency');
            $table->string('entity_type');
            $table->string('entity_id');
            $table->string('country_compliance_id');
            $table->string('complaince_name');
             $table->string('periodend');
              $table->string('form');
              $table->string('notes');
            $table->string('status');
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
        Schema::dropIfExists('manage_complience_informations');
    }
}
