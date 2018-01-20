@extends('layouts.3')
@section('konten')
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body style="background: url(img/asd.jpg) no-repeat center center fixed;
  -webkit-background-size:-cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
<div  class="col-md-13">
<div class="panel panel-primary">                
<div class="panel-body">
  <table class="table table-bordered">
            <thead>
        <th>ID</th>
        <th>NIS</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>TEMPAT LAHIR</th>
        <th>CITA-CITA</th>
        <th>TANGGAL LAHIR</th>
        <th>HOBI</th>
        <th>FOTO</th>
            </thead>
            <tbody>
   @foreach ($c as $gg)
   <tr>
  <td>{{$gg -> id}}</td>
  <td>{{$gg -> nis}}</td>
  <td>{{$gg -> nama_siswa}}</td>
  <td>{{$gg -> alamat}}</td>
  <td>{{$gg -> tempat_lahir}}</td>
  <td>{{$gg -> cita_cita}}</td>
  <td>{{$gg -> tanggal_lahir}}</td>
  <td>{{$gg -> hobi}}</td>
    <td><img src="{{ asset('img/'.$gg->foto) }}" style="max-height: 120px;max-width: 150px;"></td>
</tr>
  @endforeach
            </tbody>
</tr>
</table>
</div>
</div>
</body>
</html>
@endsection