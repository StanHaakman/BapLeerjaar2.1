<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(){
        $drivers = \DB::table('drivers')->get();
        return view('drivers',['drivers' => $drivers]);
    }
}
