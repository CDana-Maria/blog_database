<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE TABLE IF NOT EXISTS `sponsors` (
        `id` BIGINT NOT NULL AUTO_INCREMENT,
        `sponsor_name` VARCHAR(30) NOT NULL,
        `phone_number` VARCHAR(20) NOT NULL,
        `email` VARCHAR(25) NOT NULL,
        PRIMARY KEY (id)
        ) ENGINE InnoDB;
        ");
        }
        
        /**
        * Reverse the migrations.
        *
        * @return void
        */
        public function down()
        {
        DB::statement('DROP TABLE `sponsors`;');
        }
}
