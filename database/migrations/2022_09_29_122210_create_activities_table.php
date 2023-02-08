<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
             $table->string('client_group')->nullable();
            $table->string('client_entity_name')->nullable();
            $table->string('country')->nullable();
            $table->string('entity_type')->nullable();
            $table->string('year_end')->nullable();
            $table->string('status')->nullable();
            $table->string('date')->nullable();
            $table->string('company_rg_no')->nullable();
            $table->string('tax_rg_no')->nullable();
            $table->string('gst_no')->nullable();
            $table->string('withholding_tax_rg_no')->nullable();
            $table->string('social_security_no')->nullable();
            $table->string('anyother_no')->nullable();
            $table->string('csd')->nullable();
            $table->string('mat_manager')->nullable();
            $table->string('mat_spv')->nullable();
            $table->string('affiliate_name')->nullable();
            $table->string('affiliate_email')->nullable();
            $table->string('affiliate_phone')->nullable();
            $table->string('other_user')->nullable();
            $table->string('scope_work')->nullable();
            $table->string('contect_person')->nullable();
            $table->string('contect_phone')->nullable();
            $table->string('designation')->nullable();
            $table->string('email')->nullable();
            $table->string('forms')->nullable();
            $table->string('Frequency')->nullable();
            $table->string('periodend')->nullable();
            $table->string('complaince_name')->nullable();
            $table->string('notes')->nullable();
            $table->string('role')->nullable();
            $table->string('created')->nullable();
            $table->string('updated')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
