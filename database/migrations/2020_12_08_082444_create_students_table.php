<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
           
            $table->String('Photo');
            $table->String('StudentID');
            $table->String('FirstName');
            $table->String('LastName');
            $table->String('Gender');
            $table->String('DateOfBirth');
            $table->String('Designation');
            $table->String('AdminRole');
            $table->String('EmailID');
            $table->String('LinkedIn');
            $table->String('ContactNumber');
            $table->String('Faculty');
            $table->String('Department');
            $table->String('OfficialWebsite');
            $table->String('ResearchInterest');
            $table->String('FieldOfSpecialization');
            $table->String('ResearchID');

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
        Schema::dropIfExists('students');
    }
}
