<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMPEL | {{ $title }}</title>
</head>
<body>
    <p><b>judul : </b> {{ $penelitian->judul }}</p>
    <p><b>Rumpun Ilmu : </b> {{ $penelitian->rumpun_ilmu }}</p>
    <p><b>Abstract : </b> {{ $penelitian->abstract }}</p>
    <p><b>Keyword : </b> {{ $penelitian->keyword }}</p>
    <p><b>Latar Belakang : </b> {{ $penelitian->latar_belakang }}</p>
    <p><b>Tujuan : </b> {{ $penelitian->tujuan }}</p>
    <p><b>Tinjau Pustaka : </b> {{ $penelitian->tinjau_pustaka }}</p>
    <p><b>Metode : </b> {{ $penelitian->metode }}</p>
    <p><b>Lama Kegiatan : </b> {{ $penelitian->lama_kgtn }}</p>
    <p><b>Tahun Pekerjaan : </b> {{ $penelitian->thn_pekerjaan }}</p>
    <p><b>Group Riset : </b> {{ $penelitian->grp_riset }}</p>
    <button><a href="/data">Back</a></button>
</body>
</html>