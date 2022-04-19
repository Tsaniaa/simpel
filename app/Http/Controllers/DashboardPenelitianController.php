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
            "penelitians" => Penelitian::all(),
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }

    public function show(Penelitian $penelitian)
    {
        return view('detailData', [
            "title" => $penelitian->judul,
            "name" => "Tsania Ursila Razani",
            "penelitian" => $penelitian,
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }

    public function graphic()
    {
        $data = Penelitian::select(DB::raw('count(*) as jumlah_penelitian, tahun'))
            ->groupBy('tahun')->get();
        $jumlah = Penelitian::count();

        return view('home', [
            "title" => "Beranda",
            "datas" => $data,
            "jumlah" => $jumlah,
            "name" => "Tsania Ursila Razani",
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }

    public function pieGraphic()
    {
        $data = Penelitian::select(DB::raw('count(*) as jumlah_penelitian, tahun'))
            ->groupBy('tahun')->get();
        $jumlah = Penelitian::count();

        return view('pie', [
            "title" => "Beranda",
            "datas" => $data,
            "jumlah" => $jumlah,
            "name" => "Tsania Ursila Razani",
            "email" => "tsaniashella@it.student.pens.ac.id"
        ]);
    }
}
