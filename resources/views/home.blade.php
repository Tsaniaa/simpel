@extends('layouts.main')

@section('content')
<div class="row mt-4 mb-4">
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-header">
                <h2>Grafik Penelitian PENS</h2>
            </div>
            <div class="card-body">
              @include('chart')
            </div>
            <p class="card-text">*total penelitian masuk tahun 2019 hingga saat ini = {{ $jumlah }}</p>
        </div>
    </div>
</div>
@include('card-graph')

@endsection