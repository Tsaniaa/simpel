@extends('layouts.main')

@section('content')
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-header">
                        <h2>Data Penelitian PENS</h2>
                      </div>
                    <div class="card-body">
                        <table class="table" id="sortTable">
                            <thead>
                              <tr>
                                <th scope="col">JUDUL</th>
                                <th scope="col">SKEMA</th>
                                <th scope="col">DOSEN</th>
                                <th scope="col">TAHUN</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              {{-- @forelse ($blogs as $blog) --}}
                                <tr>
                                    <td>Tingkat kepuasan masyarakat...</td>
                                    <td><div class="btn btn-sm" style="border-color:orange; color: orange; weight: bold;">terapan</div></td>
                                    <td>{{ $name }} </td>
                                    <td>2017</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="#" method="POST">
                                            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-external-link"></i> buka</a>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pelayanana fasilitas pendidikan...</td>
                                    <td> <div class="btn btn-sm" style="border-color:red; color: red; weight: bold;">dasar</td>
                                    <td>Andhik Ampuh</td>
                                    <td>2020</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="#" method="POST">
                                            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-external-link"></i> buka</a>
                                        </form>
                                    </td>
                                </tr>
                              {{-- @empty
                                  <div class="alert alert-danger">
                                      Data Blog belum Tersedia.
                                  </div> --}}
                              {{-- @endforelse --}}
                            </tbody>
                          </table>  
                          {{-- {{ $blogs->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
@endsection