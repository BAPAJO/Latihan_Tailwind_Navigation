<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',[
        'name' => 'Bangun'
    ]);
});

Route::get('list-kerja/{id_pekerjaan}', function ($id){
    $pekerjaan = [
        [
            'id' => '1',
            'judul' => 'Guru',
            'gaji' => 'Rp. 17.000.000'
        ],
        [
            'id' => '2',
            'judul' => 'Desainer',
            'gaji' => 'Rp. 9.000.000'
        ],
        [
            'id' => '3',
            'judul' => 'Animator',
            'gaji' => 'Rp. 13.000.000'
        ]
        ];
        $kerja = Arr::first($pekerjaan, fn($kerja) => $kerja['id'] == $id);
        return view('kerja', ['kerja' => $kerja]);
});  
Route::get('/list-kerja', function () {
    return view('list-kerja',[
        'pekerjaan' => [
            [
                'id' => '1',
                'judul' => 'Guru',
                'gaji' => 'Rp. 17.000.000'
            ],
            [
                'id' => '2',
                'judul' => 'Desainer',
                'gaji' => 'Rp. 9.000.000'
            ],
            [
                'id' => '3',
                'judul' => 'Animator',
                'gaji' => 'Rp. 13.000.000'
            ]
        ]
    ]);
});

Route::get('/contacts', function () {
    return view('contacts');
});

# Bangun Panduko Johan K3522013