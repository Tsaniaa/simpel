<?php

namespace App\Http\Controllers;

use App\Models\Penelitian;
use Illuminate\Http\Request;

class DashboardPenelitianController extends Controller
{
    //
    public function index()
    {
        return view('data', [
            "title" => "Data Penelitian",
            "name" => "Tsania Ursila Razani",
            "penelitians" => Penelitian::all(),
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }

    public function show(Penelitian $penelitian)
    {
        // dd($penelitian->judul);
        return view('detailData', [
            "title" => $penelitian->judul,
            "name" => "Tsania Ursila Razani",
            "penelitian" => $penelitian,
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }
}
