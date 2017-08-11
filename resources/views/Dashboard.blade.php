<?php
//
//$result = $result;
//
//?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/the_form_res/css/bootstrap.css">
    <link rel="stylesheet" href="/the_form_res/css/materialize.css">
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>

<header class="nav-header">  </header>

<div class="row col-12">
    <div class="col-3">
        <br/><br/>
        <h3>YATC</h3>
        <br/><br/>

        <blockquote>Filter with gender</blockquote>

        <div class="col s5">
            <form method="get" action="/filter/gender/male">
                {{csrf_field()}}
            <input name="gender" class="btn" type="submit" id="male_" value="Male" />

            </form>
        </div>
        <div class="col s5">
            <form method="get" action="/filter/gender/female">
                {{csrf_field()}}
            <input name="gender" class="btn" type="submit" id="female_" value="Female" />

            </form>
        </div>

    </div>

    <div class="col-7">
        <br/><br/><br/>
        <div class="col-12">
            <form method="post">
                <h4>{{$message}}</h4>
                <div class="input-field col s12" style="height: auto; font-size: 30px;">
                    <select name="query" onchange="javascript:location.href = this.value;">
                        <option value="/dashboard" selected> Choose query to populate data </option>
                        <option value="/dashboard"> How satisfied do you feel with your current occupation? </option>
                        <option value="/dashboard/filter/justiceInAfrica"> How fair is the justice system in Africa? </option>
                        <option value="/dashboard/filter/filterQualityEdu"> How would you rate the quality of College education in Africa? </option>
                        <option value=""> How fair do you believe taxation is in African countries? </option>

                    </select>
                </div>
                <br/>
            </form>
<br/><br/>
            <canvas id="mybarChart"></canvas>
        </div>
    </div>

</div>


</body>

<script src="the_form_res/js/jquery-3.2.1.js"> </script>
<script src="/the_form_res/js/bootstrap.js"></script>
<script src="/the_form_res/js/materialize.js"></script>
<script src="/js/Chart.js">
</script>

<script>


    function setUpResults() {
        var arr = {{$result}};
        arr.sort();
        console.log(arr);
        var counts = {};

        for (var i = 0; i < arr.length; i++) {
            var num = arr[i];
            counts[num] = counts[num] ? counts[num] + 1 : 1;
        }

        values_ = [counts[1], counts[2], counts[3], counts[4], counts[5]];

        console.log(values_);

        return values_;
    }

    setUpResults();

    // Bar chart
    var ctx = document.getElementById("mybarChart");
    var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["1", "2", "3", "4", "5"],
            datasets: [ {
                label: '# of Votes',
                backgroundColor: "#18a689",
                data: values_
            }]
        }
    });

</script>

<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>

</html>