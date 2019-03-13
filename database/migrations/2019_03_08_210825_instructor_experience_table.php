<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InstructorExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
CREATE TABLE `instructor_experience` (
    `ID`                    int(9) NOT NULL AUTO_INCREMENT,
    `exp_related_to_track3` varchar(50),
    `other_experience`      varchar(50),
    `student_preference`    varchar(50),
    `certification_ID`      int(9) NOT NULL,
    `ski_type`              varchar(50),
    `last_off_hill`         varchar(10),
    `next_off_hill`         varchar(10),
    `last_on_hill`          varchar(10),
    `next_on_hill`          varchar(10),
    `photo_release`          varchar(9),
    `waiver`                varchar(9),
    `name_tag`              varchar(9),
    `police_check`          varchar(9),
    `police_check_year`     varchar(10),
    CONSTRAINT `Instructor_experience_PK` PRIMARY KEY (`ID`),
    CONSTRAINT `Instructor_Certification_FK` FOREIGN KEY (`certification_ID`) REFERENCES `certifications` (`ID`)
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
