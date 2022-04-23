@extends('layouts.main')

@section('content')
<div class="row mt-4 mb-4">
    <div class="col-md-12">
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color: #189AB4; color: #05445E">
                    <th>Skema</th>
                    <th>Dosen</th>
                    <th>Group Riset</th>
                    <th>Tahun</th>
                    <th>Lama Penelitian</th>
                    <th>Tahun Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                <tr style="background-color: #D4F1F4;">
                    <td>{{ $penelitian->skema->nama }}</td>
                    <td>
                        <ul>
                            @foreach ($penelitian->dosen as $dosen)
                                <li>{{ $dosen->nama }}</li>
                            @endforeach
                        </ul>
                    </td>
                    {{-- <td>{{ $penelitian->dosen->nama }}</td> --}}
                    <td>{{ $penelitian->grp_riset }}</td>
                    <td>{{ $penelitian->tahun }}</td>
                    <td>{{ $penelitian->lama_kgtn }}</td>
                    <td>{{ $penelitian->thn_pekerjaan }}</td>
                </tr>               
            </tbody>
        </table>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr><td colspan="2" style="background-color: #189AB4; color: #05445E"><center><b>{{ $penelitian->judul }}</b></center></td></tr>
                <tr>
                    <td class="table-active"><b>judul</b></td>
                    <td>{{ $penelitian->judul }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Rumpun Ilmu</b></td>
                    <td>{{ $penelitian->rumpun_ilmu }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Abstrak</b></td>
                    <td>{{ $penelitian->abstrak }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Keyword</b></td>
                    <td>{{ $penelitian->keyword }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Latar Belakang</b></td>
                    <td>{{ $penelitian->latar_belakang }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Tujuan</b></td>
                    <td>{{ $penelitian->tujuan }}</td>
                </tr>
                <tr>
                    <td class="table-active"><b>Tinjau Pustaka</b></td>
                    <td>{{ $penelitian->tinjau_pustaka }}</td>
                </tr>        
                <tr>
                    <td class="table-active"><b>Metode</b></td>
                    <td>{{ $penelitian->metode }}</td>
                </tr> 
            </tbody>
        </table>
        <button class="btn-info me-2"><a href="/data"><i class="fa fa-arrow-left"></i> kembali</a></button>
        {{-- <button class="btn-info"><a href="#"><i class="fa fa-download"></i> download abstract </a></button> --}}
    </div>
</div>

@endsection