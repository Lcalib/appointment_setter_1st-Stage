<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemporariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temporaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('country');
            $table->string('site_id');
            $table->date('date_and_time');
            $table->string('mobile_number');
            $table->string('email')->unique();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->date('birth_day');
            $table->string('gender');
            $table->string('civil_status');
            $table->string('birth_legitimacy');
            $table->string('birth_country');
            $table->string('birth_province');
            $table->string('birth_municipality');
            $table->string('current_address');
            $table->string('occupation');
            $table->string('city_address');
            $table->string('province_address');
            $table->string('father_name');
            $table->string('father_lastname');
            $table->string('father_middlename');
            $table->string('father_citizenship');
            $table->string('mother_name');
            $table->string('mother_lastname');
            $table->string('mother_middlename');
            $table->string('mother_citizenship');
            $table->string('application_type');
            $table->string('proof_type');
            $table->string('foreign_passport');
            $table->string('contact_person');
            $table->string('contact_number');
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
        Schema::dropIfExists('temporaries');
    }
}
