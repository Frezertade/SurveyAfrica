<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Suvery Africa Form</title>


    <link rel="stylesheet" href="/the_form_res/css/bootstrap.css">
    <link rel="stylesheet" href="/the_form_res/css/materialize.css">

</head>
<body>

<br/> <br/> <br/>
<div class="container">
    <form action="/formSubmit/" method="post">
        {{csrf_field()}}

    <div class="row center">

        <div class="col-sm-12">
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s5">
                            <input name="age" id="name" type="number" class="validate" min="10" required>
                            <label for="name"> AGE </label>
                        </div>

                    </div>
                    <div class="row">
                        <div class=" col s12">
                            <blockquote> Gender  </blockquote>
                            <p>
                                <input name="gender" type="radio" id="male_" value="Male" />
                                <label for="male_">Male</label>
                            </p>
                            <p>
                                <input name="gender" type="radio" id="female_" value="Female" />
                                <label for="female_">Female</label>
                            </p>

                        </div>

                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <blockquote>Country of Origin</blockquote>
                            <select name="country_origin">
                                <option value="" selected>Choose your country</option>
                                <option value="algeria">Algeria</option>
                                <option value="angola">Angola</option>
                                <option value="benin">Benin</option>
                                <option value="botswana">Botswana</option>
                                <option value="burkina Faso">Burkina Faso</option>
                                <option value="burundi">Burundi</option>
                                <option value="cameroon">Cameroon</option>
                                <option value="cape-verde">Cape Verde</option>
                                <option value="central-african-republic">Central African Republic</option>
                                <option value="chad">Chad</option>
                                <option value="comoros">Comoros</option>
                                <option value="congo-brazzaville">Congo - Brazzaville</option>
                                <option value="congo-kinshasa">Congo - Kinshasa</option>
                                <option value="ivory-coast">Côte d’Ivoire</option>
                                <option value="djibouti">Djibouti</option>
                                <option value="egypt">Egypt</option>
                                <option value="equatorial-guinea">Equatorial Guinea</option>
                                <option value="eritrea">Eritrea</option>
                                <option value="ethiopia">Ethiopia</option>
                                <option value="gabon">Gabon</option>
                                <option value="gambia">Gambia</option>
                                <option value="ghana">Ghana</option>
                                <option value="guinea">Guinea</option>
                                <option value="guinea-bissau">Guinea-Bissau</option>
                                <option value="kenya">Kenya</option>
                                <option value="lesotho">Lesotho</option>
                                <option value="liberia">Liberia</option>
                                <option value="libya">Libya</option>
                                <option value="madagascar">Madagascar</option>
                                <option value="malawi">Malawi</option>
                                <option value="mali">Mali</option>
                                <option value="mauritania">Mauritania</option>
                                <option value="mauritius">Mauritius</option>
                                <option value="mayotte">Mayotte</option>
                                <option value="morocco">Morocco</option>
                                <option value="mozambique">Mozambique</option>
                                <option value="namibia">Namibia</option>
                                <option value="niger">Niger</option>
                                <option value="nigeria">Nigeria</option>
                                <option value="rwanda">Rwanda</option>
                                <option value="reunion">Réunion</option>
                                <option value="saint-helena">Saint Helena</option>
                                <option value="senegal">Senegal</option>
                                <option value="seychelles">Seychelles</option>
                                <option value="sierra-leone">Sierra Leone</option>
                                <option value="somalia">Somalia</option>
                                <option value="south-africa">South Africa</option>
                                <option value="sudan">Sudan</option>
                                <option value="south-sudan">Sudan</option>
                                <option value="swaziland">Swaziland</option>
                                <option value="Sao-tome-príncipe">São Tomé and Príncipe</option>
                                <option value="tanzania">Tanzania</option>
                                <option value="togo">Togo</option>
                                <option value="tunisia">Tunisia</option>
                                <option value="uganda">Uganda</option>
                                <option value="western-sahara">Western Sahara</option>
                                <option value="zambia">Zambia</option>
                                <option value="zimbabwe">Zimbabwe</option>
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold"> Highest level of education achieved or currently pursuing: </h6>
                            <br/>
                            <div class="row col s12">
                                <div class="row">
                                    <div class="col s9 left-align">
                                        <input name="level_of_education" type="radio" id="less_high_school" value="less_than_high_school_" />
                                        <label for="less_high_school" style="width: 200px;">Less than high school</label>
                                    </div>

                                    <div class="col s3">
                                        <input name="level_of_education" type="radio" id="high_school" value="high_school_" />
                                        <label for="high_school">High school</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col s3">
                                        <input name="level_of_education" type="radio" id="Bachelors" value="Bachelors_" />
                                        <label for="Bachelors">Bachelors</label>
                                    </div>
                                    <div class="col s3">
                                        <input name="level_of_education" type="radio" id="Masters" value="Masters_" />
                                        <label for="Masters">Masters</label>
                                    </div>
                                </div>

                                <div class="col s3">
                                    <input name="level_of_education" type="radio" id="phd"  value="Ph.D._"/>
                                    <label for="phd">Ph.D.</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">If you have attended high school, what kind of institution did you attend?</h6>
                            <div class="row s12 left-align">
                                <div class="col s4">
                                    <input name="high_school_type" type="radio" id="public_high_school" value="public_high_school">
                                    <label for="public_high_school">Public High School</label>
                                </div>
                                <div class="col s4">
                                    <input name="high_school_type" type="radio" id="private_high_school" value="private_high_school">
                                    <label  style="width: 200px;" for="private_high_school">Private High School</label>
                                </div>
                                <div class="col s10 left-align">
                                    <input name="high_school_type" type="radio" id="home_schooled" value="home_schooled" >
                                    <label  style="width: 200px;" for="home_schooled">Home Schooled</label>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12 left-align">
                            <h6 class="font-weight-bold left-align"> Occupational Status: </h6>
                            <br/>
                            <div class="row s12">
                                <div class="col s4">
                                    <input name="occupational_status" type="radio" id="student" value="student">
                                    <label for="student">Student</label>
                                </div>
                                <div class="col s4">
                                    <input name="occupational_status" type="radio" id="employed" value="employed">
                                    <label for="employed">Employed</label>
                                </div>
                            </div>
                            <div class="row s12">
                                <div class="col s4">
                                    <input name="occupational_status" type="radio" id="Self-Employed" value="self_employed">
                                    <label for="Self-Employed">Self-Employed</label>
                                </div>
                                <div class="col s4">
                                    <input name="occupational_status" type="radio" id="Unemployed" value="unemployed">
                                    <label for="Unemployed">Unemployed</label>
                                </div>
                            </div>
                            <div class="row s12">
                                <div class="col s4">
                                    <input name="occupational_status" type="radio" id="Student_Employed" value="Student_Employed">
                                    <label for="Student_Employed">Student + Employed</label>
                                </div>
                                <div class="col s4">
                                    <input name="occupational_status" type="radio" id="Student_Self-Employed" value="Student_Self_Employed">
                                    <label for="Student_Self-Employed">Student + Self-Employed</label>
                                </div>
                            </div>
                            <div class="row s12">
                                <div class="col s4">
                                    <input name="occupational_status" type="radio" id="Student_Employed_Self_Employed" value="Student_Employed_Self_Employed">
                                    <label for="Student_Employed_Self_Employed">Student + Employed + Self-Employed</label>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <blockquote>General field of study or work:</blockquote>
                            <select name="field_study_work">
                                <option value="" selected>Choose your field</option>
                                <option value="agriculture">Agriculture</option>
                                <option value="food_and_natural_resources">Food and Natural Resources</option>
                                <option value="architecture_and_construction">Architecture and Construction</option>
                                <option value="Arts_audio_video_technology_Communications_arts">Arts, Audio/Video Technology & Communications Arts</option>
                                <option value="audio_video_technology_Communications">Audio/Video Technology and Communications</option>
                                <option value="business_management_administration">Business Management & Administration</option>
                                <option value="education_training ">Education & Training </option>
                                <option value="cape-verde">Cape Verde</option>
                                <option value="finance">Finance</option>
                                <option value="government_public_administration">Government & Public Administration</option>
                                <option value="health_science">Health Science</option>
                                <option value="hospitality_tourism">Hospitality & Tourism</option>
                                <option value="human_services">Human Services</option>
                                <option value="information_technology">Information Technology</option>
                                <option value="law">Law, Public Safety, Corrections & Security</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="marketing">Marketing</option>
                                <option value="sales_and_services">Sales and Services</option>
                                <option value="science_technology_engineering_mathematics">Science, Technology, Engineering & Mathematics</option>
                                <option value="transportation_distribution_logistics">Transportation, Distribution & Logistics</option>
                                <option value="other">other</option>

                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how satisfied do you feel with your current occupation?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="occupation_satisfaction" type="range" min="1" max="5" value="1"/>
                                </p>
                            </div>

                        </div>
                    </div>

            </div>
        </div>

        <div class="col-sm-1">

        </div>

        <div class="col-sm-5">

            <div class="row">
                <div class="col s12">

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how would you rate the favorability of the current business environment in Africa toward starting and maintaining a business?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="favorability_current_business" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how would you rate the availability of jobs and opportunities for young people in Africa?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="availability_jobs_opp" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how fair do you believe taxation is in African countries?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="taxation_fairness" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how accessible do you think financial services are to the average African?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="accessiblity_financ_serv" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how important do you think foreign aid is to Africa's development?</h6>
                            <div class="row s12">
                                    <input name="foreign_aid" type="range" id="fa_one" value="1" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="row center">

        <div class="col-sm-5">
            <div class="row">
                <div class="col s12">

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how safe do you think Africa is from crime, terrorism and other physical threats?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="crime_safety" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how accessible is the legal system in Africa? (Police, Lawyers, Courts…)</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="accessiblity_legal_sys" type="range"  min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how fair is the justice system in Africa?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="fairness_justice" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how satisfied are you with the quality of government services in Africa?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="gov_services_rating" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-1">

        </div>

        <div class="col-sm-5">

            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how would you rate the quality of High School education in Africa?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="quality_high_school_edu" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how would you rate the quality of College education in Africa?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="quality_colleage_edu" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how would you rate the state of Science, Technology and Innovation in Africa?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="state_science_tech_Inno" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="row center">
        <div class="col-sm-5">

            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how honest do you think Africans are?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="honesty_africans" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how hard working do you think Africans are?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="hardworking_africans" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how patriotic do you think Africans are, as it relates to Pan-Africanism?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="african_patriots" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how would you rate the state of gender equality in Africa?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="gender_equality" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class=" col s12">
                            <h6 class="font-weight-bold left-align">On a scale of 1 to 5, how hospitable and tolerant do you think Africans are?</h6>
                            <div class="row s12">
                                <p class="range-field col-md-12">
                                    <input name="hospitable_tolerant_africans" type="range" min="1" max="5" value="0"/>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>


    <input type="submit" class="btn" value="Submit">

    </form>

</div>



</body>
<script src="/the_form_res/js/jquery-3.2.1.js"></script>
<script src="/the_form_res/js/bootstrap.js"></script>
<script src="/the_form_res/js/materialize.js"></script>

<script>


    $(document).ready(function() {
        $('select').material_select();
    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
    });

</script>

</html>