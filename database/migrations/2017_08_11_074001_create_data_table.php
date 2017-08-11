<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age');
            $table->text('gender');
            $table->text('country_origin');
            $table->text('level_of_education');
            $table->text('high_school_type');
            $table->text('occupational_status');
            $table->text('field_study_work');
            $table->integer('occupation_satisfaction');

            $table->integer('favorability_current_business');
            $table->integer('availability_jobs_opp');
            $table->integer('taxation_fairness');
            $table->integer('accessiblity_financ_serv');
            $table->integer('foreign_aid');
            $table->integer('crime_safety');

            $table->integer('accessiblity_legal_sys');
            $table->integer('fairness_justice');
            $table->integer('gov_services_rating');

            $table->integer('quality_high_school_edu');
            $table->integer('quality_colleage_edu');
            $table->integer('state_science_tech_Inno');

            $table->integer('honesty_africans');
            $table->integer('hardworking_africans');
            $table->integer('african_patriots');
            $table->integer('gender_equality');
            $table->integer('hospitable_tolerant_africans');

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
        Schema::dropIfExists('data');
    }
}
