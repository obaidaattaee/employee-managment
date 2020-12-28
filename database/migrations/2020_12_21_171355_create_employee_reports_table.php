<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_reports', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->foreignId('customer_id')->constrained('users' , 'id');
            $table->string('employee_name');
            $table->foreignId('company_id')->constrained('users' , 'id');
            $table->string('work_space');
            $table->foreignId('employee_id')->constrained('users' , 'id');
            $table->integer('operating_expenses');
            $table->integer('working_hours');
            $table->integer('overtime');
            $table->json('images');
            $table->text('notes');
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
        Schema::dropIfExists('employee_reports');
    }
}
