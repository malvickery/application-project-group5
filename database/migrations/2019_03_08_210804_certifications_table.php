<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
CREATE TABLE `certifications` (
    `ID`                    int(9) NOT NULL AUTO_INCREMENT,
    `is_CSIA`               varchar(5),
    `CSIA_number`           varchar(20),
    `is_CSCF`               varchar(5),
    `CSCF_number`           varchar(20),
    `is_CASI`               varchar(5),
    `CASI_number`           varchar(20),
    CONSTRAINT `Certification_PK` PRIMARY KEY (`ID`)
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
