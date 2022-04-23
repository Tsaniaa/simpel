@extends('layouts.main')

@section('content')
<div class="row mt-4 mb-4">
    <div class="col-md-12">
        <div class="card border-0 shadow rounded">
            <div class="card-header">
                <h2>Jumlah Penelitian = {{ $jumlah }}</h2>
            </div>
            <div class="card-body">
                <button class="btn-info"><a href="/"><i class="fa fa-bar-chart me-2"></i>Bar chart</a></button>
                <button class="btn-info"><a href="/barProdi"><i class="fa fa-pie-chart me-2"></i>grafik prodi</a></button>

                <div class="shadow1">
                    <div class="content">                    
                    <center><div class="col-4 mb-2">
                        {{-- convert data ke array --}}
                        <?php 
                            $jml = array();
                            $thn = array();
                            foreach ($datas as $data ) {
                                array_push($jml, $data->jumlah_penelitian);
                                array_push($thn, $data->tahun);
                            }
                            array_push($jml,0);
                        ?>
                    
                        {{-- Start buat Bar chart --}}
                    
                            {{-- import cdnjs chart --}}
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                    
                            {{-- identifikasi chart --}}
                            <canvas id="myChart" width="50" height="50"></canvas>
                    
                    
                            {{-- proses --}}
                            <script>
                                const labels = <?php echo json_encode($thn); ?>;
                                const jumlah = <?php echo json_encode($jml); ?>;
                                Chart.defaults.font.size = 15;
                    
                                // Mengatur data beserta Tampilannya
                                const data = {
                                    labels: labels,
                                    datasets: [{
                                        label: 'My First Dataset',
                                        data: jumlah,
                                        backgroundColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(220,20,60)',
                                        'rgb(54, 162, 235)',
                                        'rgb(255, 205, 86)',
                                        'rgb(34, 139, 35)',
                                        'rgb(30, 144, 255)',
                                        'rgb(60, 179, 113)',
                                        ],
                                        hoverOffset: 4
                                    }]
                                };
                    
                                const config = {
                                    type: 'doughnut',
                                    data: data,
                                };
                    
                                const myChart = new Chart(
                                    document.getElementById('myChart'),
                                    config
                                );
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('card-graph')

@endsection