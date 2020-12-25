<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMmcompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mmcompanies', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('face')->nullable();
            $table->string('google')->nullable();
            $table->string('insta')->nullable();
            $table->string('twitter')->nullable();
            $table->string('address')->nullable();
            $table->integer('code')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('mmcompanies');
    }
}
