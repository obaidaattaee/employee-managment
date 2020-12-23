<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_reports', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->foreignId('customer_id')->constrained('users' , 'id');
            $table->string('customer_name');
            $table->text('work_space');
            $table->foreignId('employee_id')->constrained('users' , 'id');
            $table->string('evaluation');
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
        Schema::dropIfExists('customer_reports');
    }
}
