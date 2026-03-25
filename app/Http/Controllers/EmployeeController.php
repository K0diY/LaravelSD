<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
     public function index()
    {
        $conferences = [
            [
                'id' => 1,
                'title' => 'Laravel konferencija',
                'date' => '2026-04-01',
                'location' => 'Vilnius'
            ],
            [
                'id' => 2,
                'title' => 'PHP konferencija',
                'date' => '2026-05-10',
                'location' => 'Kaunas'
            ]
        ];

        return view('employee.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = [
            'id' => $id,
            'title' => 'Laravel konferencija',
            'description' => 'Apie Laravel framework',
            'date' => '2026-04-01',
            'location' => 'Vilnius'
        ];

        $participants = [
            'Jonas Jonaitis',
            'Petras Petraitis',
            'Ona Onaite'
        ];

        return view('employee.show', compact('conference', 'participants'));
    }
}
