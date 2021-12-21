<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return ([
            'NIS'=> '3103119089',
            'Nama' => 'Ibnu Nur Salim',
            'Gender' => 'Pria',
            'Phone' => '081392866431',
            'Class' => 'XII RPL 3'
        ]);
}
}