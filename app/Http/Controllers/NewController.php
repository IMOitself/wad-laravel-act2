<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NewController extends Controller
{
    public function staticRoute(): View
    {
        return view('home');
    }

    public function dynamicRoute($user): View
    {
        return view('profile', ['user' => $user]);
    }

    public function multipleRoute($first_name, $last_name): View
    {
        return view('fullname', compact('first_name', 'last_name'));
    }

    public function optionalRoute($course = 'bsis2'): View
    {
        return view('course', ['course' => $course]);
    }

    public function conditionalRoute($user): View
    {
        if($user == 'secret'){
            return view('secret', ['user' => $user]);
        }

        return view('profile', ['user' => $user]);
    }

    public function arrayRoute(): View
    {
        $array = ['Santos, JayR', 'Bautista, Russell', 'Cuervo, Rancel', 'Gultiano, Winston', 'Mandocdoc, Marwin', 'Villar, Maynard'];
        return view('student_list', compact('array'));
    }
}