<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function showSinhVien(){
        $sinhvien = [
            [
                'id' => '1',
                'msv' => 'PH34666',
                'name' => 'Thinh',
                'birthday' => '12/01/2004',
                'phone' => '0387250447',
                'email' => 'thinhmt@gmail.com'
            ],
            [
                'id' => '2',
                'msv' => 'PH12345',
                'name' => 'Hoàng',
                'birthday' => '11/10/2004',
                'phone' => '0873625839',
                'email' => 'hoang@gmail.com'
            ],
            [
                'id' => '3',
                'msv' => 'PH43662',
                'name' => 'Nguyen',
                'birthday' => '08/08/2004',
                'phone' => '0962643743',
                'email' => 'nguyen@gmail.com'
            ],
            [
                'id' => '4',
                'msv' => 'PH44556',
                'name' => 'Binh',
                'birthday' => '12/09/2004',
                'phone' => '0962643743',
                'email' => 'binh@gmail.com'
            ],
            [
                'id' => '5',
                'msv' => 'PH23645',
                'name' => 'An',
                'birthday' => '28/04/2004',
                'phone' => '0962643743',
                'email' => 'an@gmail.com'
            ]
            ];
        return view('list-sinhvien')->with([
            'sinhvien' => $sinhvien
        ]);
    }
}
