<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
CREATE TABLE `user_address` (
    `id`                    int(9) NOT NULL AUTO_INCREMENT,
    `address_line_one`      varchar(200),
    `address_line_two`      varchar(200),
    `city`                  varchar(100),
    `province`              varchar(100),
    `postal_code`           varchar(9),
    CONSTRAINT `User_Address_PK` PRIMARY KEY (`id`)

);");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
