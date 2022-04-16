@extends('layouts.main')

@section('content')
        <div class="row mt-4 mb-4">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <h2>Data Penelitian PENS</h2>
                    </div>
                    <div class="card-body">
                        <table class="table" id="sortTable">
                            <thead>
                              <tr>
                                <th scope="col">NO</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">SKEMA</th>
                                <th scope="col">DOSEN</th>
                                <th scope="col">TAHUN</th>
                                <th scope="col">DETAIL</th>
                              </tr>
                            </thead>
                            <tbody>
                              @if ($penelitians->count() != 0)
                                  @foreach ($penelitians as $penelitian)

                                  <?php $tahun = substr($penelitian->thn_penelitian,0,4) ?>
                                    <tr>
                                        <td> nomor </td>
                                        <td>{{ $penelitian->judul }}</td>                                        
                                        <td><div class="btn btn-sm" style="border-color:{{ ($penelitian->skema->nama === "Dasar") ? 'red' : 'green'}}; color: {{ ($penelitian->skema->nama === "Dasar") ? 'red' : 'green'}}; weight: bold;">{{ $penelitian->skema->nama }}</div></td>
                                        <td>{{ $penelitian->dosen->nama }} </td>
                                        <td>{{  $tahun }}</td>
                                        <td class="text-center">
                                            {{-- <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="#" method="POST"> --}}
                                                <a href="/data/{{ $penelitian->id }}" class="btn btn-sm btn-success"><i class="fa fa-external-link"></i></a>
                                            {{-- </form> --}}
                                        </td>
                                    </tr>

                                      
                                  @endforeach
                              @else
                                    <div class="alert alert-danger">
                                      Data Penelitian belum Tersedia.
                                    </div>
                              @endif
                              
                            </tbody>
                          </table>  
                    </div>
                </div>
            </div>
        </div>
@endsection