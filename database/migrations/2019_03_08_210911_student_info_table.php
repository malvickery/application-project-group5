<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
CREATE TABLE `student_info` (
    `user_ID`               int(9),
    `student_ID`            int(9) NOT NULL AUTO_INCREMENT,
    `wait_list`             varchar(30), 
    `emergency_contact`      varchar(30) NOT NULL,
    `relationship`          varchar(30) NOT NULL,
    `first_name`            varchar(50) NOT NULL,
    `last_name`             varchar(50) NOT NULL,
    `email`                 varchar(50) NOT NULL,
    `height_feet`           varchar(10),
    `height_inch`           varchar(10),
    `weight`                varchar(9),
    `gender`                varchar(10),
    `date_of_birth`         varchar(10),
    `special_instruction`   varchar(50),
    `ski_type`          varchar(30),
    `preferred_day`         varchar(30),
    `alternate_day`        varchar(30),
    `preferred_instructor`   varchar(30),
    `address_ID`            int(9) NOT NULL,
    `contact_ID`            int(9) NOT NULL,
    `photo_release`          varchar(9),
    `years_experience`         int(9),
    `years_in_program`       int(9),
    `waiver`                varchar(9),
    `paid`                  varchar(9),
    CONSTRAINT `Student_PK` PRIMARY KEY (`student_ID`),
    CONSTRAINT `Student_Email_UK` UNIQUE (`email`),
    CONSTRAINT `Student_User_FK` FOREIGN KEY (`user_ID`) REFERENCES `users` (`id`),
    CONSTRAINT `Student_Address_FK` FOREIGN KEY (`address_ID`) REFERENCES `user_address` (`ID`),
    CONSTRAINT `Student_Contact_FK` FOREIGN KEY (`contact_ID`) REFERENCES `contact` (`ID`)
);
");
//        took out this table reference and table field for time being
//         CONSTRAINT `Student_Health_FK` FOREIGN KEY (`student_health_ID`) REFERENCES `student_health` (`student_health_ID`)
//        `student_health_ID`     int(9) NOT NULL,

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
