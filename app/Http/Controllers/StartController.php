<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {

        $cars = [
            [
                'mark' => 'Toyota',
                'model' => 'Prius',
                'bsfc' => '4.5',
            ],
            [
                'mark' => 'Mitsubishi',
                'model' => 'Colt',
                'bsfc' => '8.0',
            ],
        ];

        return view('start', ['cars' => $cars]);
    }
}
