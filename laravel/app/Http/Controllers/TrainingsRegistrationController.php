<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingsRegistrationController extends Controller
{
    public function test(){

        $trainingsRegistration = new \App\TrainingsRegistration();
        $trainingsRegistration->firstname = 'Stan';
        $trainingsRegistration->lastname = 'Haakman';
        $trainingsRegistration->email = 'stanhaakman@hotmail.com';
        $trainingsRegistration->telefoonnummer = '06 48607062';

        $trainingsRegistration->save();
        return 'oke, bewaard';
    }
}
