<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_first_name',50);
            $table->string('employee_last_name',50);
            $table->char('oib',11)->nullable();
            $table->string('job_name',255)->nullable();
            $table->string('employee_address',255)->nullable();
            $table->string('employee_email',255)->nullable();
            $table->string('phone_number',50)->nullable();
            /*created_at updated_at*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
