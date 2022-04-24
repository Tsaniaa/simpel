@extends('layouts.main')

@section('content')
<div class="row mt-4 mb-4">
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-header">
                <div class="btn-group dropright">
                    <h2 style="align-self: center">Grafik Penelitian PENS</h2>
                    <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:10px; background-color: #05445E; border-color: #05445E">
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="\">Berdasar Tahun Penelitian</a>
                        <a class="dropdown-item" href="\barProdi">Berdasar Prodi Penelitian</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <button class="btn-info"><a href="\barProdi"><i class="fa fa-bar-chart me-2"></i>Bar Chart</a></button>
                <button class="btn-info"><a href="\pieProdi"><i class="fa fa-pie-chart me-2"></i>Pie Chart</a></button>
                <div class="shadow1">
                    <div class="content"> 
                        @yield('chartProdi')
                    </div>
                </div>
            </div>
            <p class="card-text">*total penelitian masuk tahun {{ $tahun_min->tahun }} hingga saat ini = {{ $jumlah }}</p>
        </div>
    </div>
@include('prodiChart.cardProdi')

@endsection