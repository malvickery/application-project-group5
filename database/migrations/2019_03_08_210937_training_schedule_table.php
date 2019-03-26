<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TrainingScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
CREATE TABLE `training_schedule` (
    `ID`                    int(9) NOT NULL AUTO_INCREMENT,
    `title`                 varchar(50),
    `training_date`         DATE,
    `time_begins`           varchar(20),
    `time_ends`             varchar(20),
    CONSTRAINT `Training_Schedule_PK` PRIMARY KEY (`ID`)
);
");
    }
//CONSTRAINT `Training_Student_FK` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`),
//CONSTRAINT `Training_Instructor_FK` FOREIGN KEY (`instructor_ID`) REFERENCES `instructor` (`instructor_ID`)
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
