<?php

namespace App\Http\Controllers;

use App\data;
use Illuminate\Http\Request;
use DB;

class dashboardController extends Controller
{
    //
    public function check(){
        $result = DB::table('data')->pluck('occupation_satisfaction');
        $message="How satisfied do you feel with your current occupation?";
        return view('Dashboard' , compact('result', 'message'));
    }

    public function filterGenderMale(){

        $result = DB::table('data')->where('gender','male')->pluck('occupation_satisfaction');
        $message="How satisfied do you feel with your current occupation?";
        return view('Dashboard' , compact('result', 'message'));
    }

    public function filterGenderFemale(){

        $result = DB::table('data')->where('gender','female')->pluck('occupation_satisfaction');
        $message="How satisfied do you feel with your current occupation?";
        return view('Dashboard' , compact('result', 'message'));
    }

    public function filterJusticeAfrica(){
        $result = DB::table('data')->pluck('fairness_justice');
        $message="How fair is the justice system in Africa?";
        return view('Dashboard' , compact('result', 'message'));
    }

    public function filterQualityEdu(){
        $result = DB::table('data')->pluck('quality_colleage_edu');
        $message="How would you rate the quality of College education in Africa?";
        return view('Dashboard' , compact('result', 'message'));
    }

}
