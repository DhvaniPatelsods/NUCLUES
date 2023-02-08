<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackupRestoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backup_restores', function (Blueprint $table) {
            $table->id();
            $table->string('client_group')->nullable();
            $table->string('entity_name')->nullable();
            $table->string('user')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->integer('restored_by')->nullable();
            $table->timestamp('restored_at')->nullable();
            $table->boolean('status')->nullable();
        
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
        Schema::dropIfExists('backup_restores');
    }
}
