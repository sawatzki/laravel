<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index()
    {
        $url_data = [
            [
                'title' => 'Google111',
                'url' => 'https://google.com111'
            ],
            [
                'title' => 'Yandex222',
                'url' => 'https://ya.ru222'
            ],
        ];

        return view('start', ['url_data' => $url_data]);
    }
public function ajax()
    {
        $url_data = [
            [
                'title' => 'Google111',
                'url' => 'https://google.com111'
            ],
            [
                'title' => 'Yandex222',
                'url' => 'https://ya.ru222'
            ],
            [
                'title' => 'Yandex333',
                'url' => 'https://ya.ru333'
            ],
        ];

        return view('ajax', ['url_data' => $url_data]);
    }

    public function getJson()
    {
        return [
            [
                'title' => 'Google',
                'url' => 'https://google.com'
            ],
            [
                'title' => 'Yandex',
                'url' => 'https://ya.ru'
            ],
        ];
//        return view('start', ['urls']);
    }

}
