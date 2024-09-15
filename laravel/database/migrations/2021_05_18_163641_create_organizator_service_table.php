<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizatorServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizator_service', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('service_id');
            $table->BigInteger('organizator_id');

            $table->foreign('service_id')->references('id')->on('services')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('organizator_id')->references('id')->on('organizators')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizator_service');
    }
}
