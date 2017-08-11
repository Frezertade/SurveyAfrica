<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    //
    protected $fillable = ['age', 'gender', 'country_origin','level_of_education',
        'high_school_type', 'country_origin' , 'occupational_status','field_study_work',
        'occupation_satisfaction', 'favorability_current_business', 'availability_jobs_opp',
        'taxation_fairness', 'accessiblity_financ_serv' , 'foreign_aid','crime_safety',
        'accessiblity_legal_sys', 'fairness_justice', 'gov_services_rating','quality_high_school_edu',
        'quality_colleage_edu', 'state_science_tech_Inno', 'honesty_africans',
        'hardworking_africans', 'african_patriots' , 'gender_equality','hospitable_tolerant_africans'];

}
