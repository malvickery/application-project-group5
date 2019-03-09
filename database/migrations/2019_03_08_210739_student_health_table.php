<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentHealthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
CREATE TABLE `student_health` (
    `student_health_ID`     int(9) NOT NULL AUTO_INCREMENT,
    `health_card_number`    varchar(30),
    `health_info`           varchar(100),
    `allergies`             varchar(100),
    `on_medication`         varchar(9),
    `medication_details`    varchar(200),
    `seizures`              varchar(9),
    `seizures_type`         varchar(50),
    `seizures_frequency`    varchar(30),
    `shunt`                 varchar(9),
    `shunt_type`            varchar(50),
    `shunt_blockage`        varchar(50),
    `reaction`              varchar(100),
    `toileting_needs`       varchar(200),
    `photo_relese`          varchar(9),
    `waiver`                varchar(9),
    `paid`                  varchar(9),
    CONSTRAINT `Student_Health_PK` PRIMARY KEY (`student_health_ID`)
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
