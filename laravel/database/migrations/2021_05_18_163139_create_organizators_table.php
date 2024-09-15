<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class CreateOrganizatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE TABLE `organizators` (
        `id` BIGINT NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(50) NOT NULL,
        PRIMARY KEY (`id`)
        )ENGINE InnoDB;
        ");
        }
        
        /**
        * Reverse the migrations.
        *
        * @return void
        */
        public function down()
        {
        DB::statement('DROP TABLE `organizators`;');
        }
}
