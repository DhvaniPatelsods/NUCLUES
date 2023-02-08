<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientEntityMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_entity_masters', function (Blueprint $table) {
            $table->id();
            $table->string('client_group');
            $table->string('client_entity_name');
            $table->string('country');
            $table->string('entity_type');
            $table->string('year_end');
            $table->string('status');
            $table->string('date');
            $table->string('company_rg_no');
            $table->string('tax_rg_no');
            $table->string('gst_no');
            $table->string('withholding_tax_rg_no');
            $table->string('social_security_no');
            $table->string('anyother_no');
            $table->string('csd');
            $table->string('mat_manager');
            $table->string('mat_spv');
            $table->string('affiliate_name');
            $table->string('affiliate_email');
            $table->string('affiliate_phone');
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
        Schema::dropIfExists('client_entity_masters');
    }
}
