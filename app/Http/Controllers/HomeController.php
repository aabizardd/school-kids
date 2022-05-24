<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Learning;

class HomeController extends Controller
{
    public function index()
    {

        $metode_pembelajran = Learning::get();
        $kelas = Classes::get();

        $data = [
            'title' => 'Home',
            'learnings' => $metode_pembelajran,
            'classes' => $kelas,
        ];

        return view('home.main', $data);
    }
}