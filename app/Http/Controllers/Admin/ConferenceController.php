<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function adminIndex()
    {
        return view('admin.index');
    }

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

        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function edit($id)
    {
        $conference = [
            'id' => $id,
            'title' => 'Laravel konferencija',
            'description' => 'Apie Laravel framework',
            'date' => '2026-04-01',
            'location' => 'Vilnius'
        ];

        return view('admin.conferences.edit', compact('conference'));
    }
}
