<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        return view('cars');
    }

    public function getCars()
    {
        return [
            [
                'mark' => 'Nissan',
                'model' => 'Juke',
            ],
            [
                'mark' => 'Mitsubishi',
                'model' => 'Colt',
            ],
        ];
    }

}
