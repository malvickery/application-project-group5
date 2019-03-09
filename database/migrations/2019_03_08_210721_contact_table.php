<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
CREATE TABLE `contact` (
    `ID`                    int(9) NOT NULL AUTO_INCREMENT,
    `phone`                 varchar(14),
    `alt_phone`             varchar(14),
    `emergency_contact`     varchar(50),
    `emergency_phone`       varchar(14),
    `relationship`          varchar(30),
    `emergency_alt_phone`   varchar(14),
    CONSTRAINT `Contact_PK` PRIMARY KEY (`ID`)
);
");
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
