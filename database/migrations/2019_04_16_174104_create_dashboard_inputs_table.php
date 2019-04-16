<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDashboardInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
CREATE TABLE `dashboard_inputs` (
    `id`                    int(9) NOT NULL AUTO_INCREMENT,
    `announcement_date`           date,
    `announcement_desc`             varchar(255),
    KEY (id)
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
        Schema::dropIfExists('dashboard_inputs');
    }
}
