<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InstructorInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
CREATE TABLE `instructor_info` (
    `instructor_ID`         int(9) NOT NULL AUTO_INCREMENT,
    `user_ID`               int(9) NOT NULL,
    `first_name`            varchar(50) NOT NULL,
    `last_name`             varchar(50) NOT NULL,
    `email`                 varchar(50) NOT NULL,
    `height_feet`           varchar(10),
    `height_inch`           varchar(10),
    `weight`                varchar(9),
    `gender`                varchar(10),
    `date_of_birth`         varchar(10),
    `address_ID`            int(9) NOT NULL,
    `contact_ID`            int(9) NOT NULL,
    `ski_type`       varchar(30),
    `preferred_day`         varchar(30),
    `alternate_day`        varchar(30),   
    `experience_ID`         int(9) NOT NULL,
    `deleted_at` timestamp NULL DEFAULT NULL,

    CONSTRAINT `Instructor_PK` PRIMARY KEY (`instructor_ID`),
    CONSTRAINT `Instructor_User_FK` FOREIGN KEY (user_ID) REFERENCES `users` (`id`),
    CONSTRAINT Instructor_Email_UK UNIQUE (`email`),
    CONSTRAINT Instructor_Address_FK FOREIGN KEY (address_ID) REFERENCES `user_address` (`ID`),
    CONSTRAINT `Instructor_Contact_FK` FOREIGN KEY (contact_ID) REFERENCES `contact` (`ID`),
    CONSTRAINT `Instructor_Experience_FK` FOREIGN KEY (experience_ID) REFERENCES `instructor_experience` (`ID`)
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
