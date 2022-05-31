<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    public function index()
    {
        $allMurid = Students::get();
        $data = [
            'title' => 'Home',
            'murids' => $allMurid,
        ];

        return view('admin.main', $data);
    }
}
