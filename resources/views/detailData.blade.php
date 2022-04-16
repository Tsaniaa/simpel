@extends('layouts.main')

@section('content')
<div class="row mt-4 mb-4">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color: #518459; color: #C3E0E5">
                    <th>Skema</th>
                    <th>Dosen</th>
                    <th>Group Riset</th>
                    <th>Tahun</th>
                    <th>Lama Penelitian</th>
                    <th>Tahun Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $penelitian->skema->nama }}</td>
                    <td>{{ $penelitian->dosen->nama }}</td>
                    <td>{{ $penelitian->grp_riset }}</td>
                    <td>{{ $penelitian->thn_penelitian }}</td>
                    <td>{{ $penelitian->lama_kgtn }}</td>
                    <td>{{ $penelitian->thn_pekerjaan }}</td>
                </tr>               
            </tbody>
        </table>
        <table class="table table-bordered">
            <tbody>
                <tr><td colspan="2" style="background-color: #518459; color: #C3E0E5"><center><b>{{ $penelitian->judul }}</b></center></td></tr>
                <tr>
                    <td><b>judul</b></td>
                    <td>{{ $penelitian->judul }}</td>
                </tr>
                <tr>
                    <td><b>Rumpun Ilmu</b></td>
                    <td>{{ $penelitian->rumpun_ilmu }}</td>
                </tr>
                <tr>
                    <td><b>Abstrak</b></td>
                    <td>{{ $penelitian->abstract }}</td>
                </tr>
                <tr>
                    <td><b>Keyword</b></td>
                    <td>{{ $penelitian->keyword }}</td>
                </tr>
                <tr>
                    <td><b>Latar Belakang</b></td>
                    <td>{{ $penelitian->latar_belakang }}</td>
                </tr>
                <tr>
                    <td><b>Tujuan</b></td>
                    <td>{{ $penelitian->tujuan }}</td>
                </tr>
                <tr>
                    <td><b>Tinjau Pustaka</b></td>
                    <td>{{ $penelitian->tinjau_pustaka }}</td>
                </tr>        
                <tr>
                    <td><b>Metode</b></td>
                    <td>{{ $penelitian->metode }}</td>
                </tr> 
            </tbody>
        </table>
        <button class="btn-info"><a href="/data"><i class="fa fa-arrow-left"></i> kembali</a></button>
    </div>
</div>

@endsection