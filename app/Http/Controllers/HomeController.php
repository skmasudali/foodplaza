<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function index(Request $request)
    {
         $abc = 'Cars Table';
        // return view('welcome',compact('abc'));



        $cars = [
            [
                'carName' => 'Volvo',
                'number' => 22,
                'pin' => 18
            ],
            [
                'carName' => 'BMW',
                'number' => 15,
                'pin' => 13
            ],
            [
                'carName' => 'Saab',
                'number' => 5,
                'pin' => 2
            ],
            [
                'carName' => 'Land Rover',
                'number' => 17,
                'pin' => 15
            ],
        ];  
        return view('welcome',compact('abc', 'cars'));
    }

}
