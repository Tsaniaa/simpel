<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Penelitian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardPenelitianController extends Controller
{
    //
    public function index()
    {
        return view('data', [
            "title" => "Data Penelitian",
            "name" => "Tsania Ursila Razani",
            "penelitians" => Penelitian::with(['skema', 'dosen'])->latest()->get(),
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }

    public function show(Penelitian $penelitian)
    {
        return view('detailData', [
            "title" => $penelitian->judul,
            "name" => "Tsania Ursila Razani",
            "penelitian" => $penelitian->load(['skema', 'dosen']),
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }


}
