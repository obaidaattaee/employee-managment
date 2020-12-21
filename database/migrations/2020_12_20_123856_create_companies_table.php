<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('title') ;
            $table->string('email')->unique() ;
            $table->string('phone')->unique() ;
            $table->string('address') ;
            $table->string('code')->unique() ;
            $table->string('logo')->nullable();
            $table->string('face')->nullable();
            $table->string('google')->nullable();
            $table->string('insta')->nullable();
            $table->string('twitter')->nullable();
            $table->string('password');
            $table->foreignId('parent_id')->default(1)->constrained('companies' , 'id');
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
        Schema::dropIfExists('companies');
    }
}
