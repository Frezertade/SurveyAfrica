<?php

use Illuminate\Database\Seeder;

class defaultDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        $limit = 12;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('data')->insert([ //,
                'age' => $faker->numberBetween(10,50),
                'gender' => $faker->randomElement(['male', 'female']),
                'country_origin' => $faker->randomElement(['Ethiopia', 'Kenya']),
                'level_of_education' => $faker->randomElement(['High School', 'Bachelor']),
                'high_school_type' => $faker->randomElement(['Public', 'Private']),
                'occupational_status' => $faker->randomElement(['student', 'employed']),
                'field_study_work' => $faker->randomElement(['Agriculture', 'Finance']),

                'occupation_satisfaction' => $faker->numberBetween(1,5),
                'favorability_current_business' => $faker->numberBetween(1,5),
                'availability_jobs_opp' => $faker->numberBetween(1,5),
                'taxation_fairness' => $faker->numberBetween(1,5),
                'accessiblity_financ_serv' => $faker->numberBetween(1,5),
                'foreign_aid' => $faker->numberBetween(1,5),
                'crime_safety' => $faker->numberBetween(1,5),
                'accessiblity_legal_sys' => $faker->numberBetween(1,5),
                'fairness_justice' => $faker->numberBetween(1,5),
                'gov_services_rating' => $faker->numberBetween(1,5),

                'quality_high_school_edu' => $faker->numberBetween(1,5),
                'quality_colleage_edu' => $faker->numberBetween(1,5),
                'state_science_tech_Inno' => $faker->numberBetween(1,5),

                'honesty_africans' => $faker->numberBetween(1,5),
                'hardworking_africans' => $faker->numberBetween(1,5),

                'african_patriots' => $faker->numberBetween(1,5),
                'gender_equality' => $faker->numberBetween(1,5),
                'hospitable_tolerant_africans' => $faker->numberBetween(1,5),

            ]);
        }
    }
}
