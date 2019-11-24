<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index(){

        $cars = [
            [
                'mark' => 'VW',
                'model' => 'Passat',
            ],
            [
                'mark' => 'Mitsubishi',
                'model' => 'Colt',
            ],
            [
                'mark' => 'Toyota',
                'model' => 'Prius',
            ],

        ];
//        dd($cars);
        return view('public.cars.index', ['cars' => $cars]);
    }
}
