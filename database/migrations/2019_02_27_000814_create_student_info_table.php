<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentInfoTable extends Migration
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
    `userID`int(9) NOT NULL,
    `point_of_contact` varchar(30) NOT NULL,
    `relationship` varchar(30) NOT NULL,
    `first_name` varchar(50) NOT NULL,
    `last_name` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `height_feet` varchar(10) NOT NULL,
    `height_inch` varchar(10) NOT NULL,
    `weight` varchar(9) NOT NULL,
    `gender` varchar(10),
    `date_of_birth` varchar(10),
    `special_instruction` varchar(50),
    `student_type` varchar(30) NOT NULL,
    `prefered_date` varchar(30) NOT NULL,
    `alternate_date` varchar(30) NOT NULL,
    `prefered_instructor` varchar(30) NOT NULL,
    PRIMARY KEY (`userID`)
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
        Schema::dropIfExists('student_info');
    }
}


//CREATE TABLE 'student_info' (
//id int unsigned AUTO_INCREMENT primary key,
//    user_id int NOT NULL,
//    point_of_contact varchar(30) NOT NULL,
//    relationship varchar(30) NOT NULL,
//    first_name varchar(50) NOT NULL,
//    last_name varchar(50) NOT NULL,
//    email varchar(50) NOT NULL,
//    height_feet varchar(10) NOT NULL,
//    height_inch varchar(10) NOT NULL,
//    weight varchar(9) NOT NULL,
//    gender varchar(10),
//    date_of_birth varchar(10),
//    special_instruction varchar(50),
//    student_type varchar(30) NOT NULL,
//    prefered_date varchar(30) NOT NULL,
//    alternate_date varchar(30) NOT NULL,
//    prefered_instructor varchar(30) NOT NULL
//    );