@extends('master')
@section('container')
<div class="panel panel-default	">
	<div class="panel-heading">
		<strong>Seluruh Data Jadwal Mahasiswa</strong>
		<a href="{{url('jadwal_matakuliah/tambah')}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus">Jadwal Mahasiswa</i></a>
	<div class="clearfix"></div>
	
</div>
<table class="table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Mahasiswa</th>
			<th>NIM Mahasiswa</th>
			<th>Nama Matakuliah</th>
			<th>Ruangan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
	<tr>
		<?php $x=1; ?>
		@foreach($semuaJadwalMatakuliah as $jadwal_matakuliah)
		<td>{{ $x++ }}</td>
		<td>{{ $jadwal_matakuliah->mahasiswa->nama or 'nama Kosong' }}</td>
		<td>{{ $jadwal_matakuliah->mahasiswa->nim or 'nim Kosong' }}</td>
		<td>{{ $jadwal_matakuliah->dosen_matakuliah->matakuliah->titile or 'matakuliah kosong' }}</td>
		<td>{{ $jadwal_matakuliah->ruangan->title }}</td>
		<td>
			<div class="btn-group" role="group">
				<a href="{{url('jadwal_matakuliah/edit/'.$jadwal_matakuliah->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
				<a href="{{url('jadwal_matakuliah/lihat/'.$jadwal_matakuliah->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
				<a href="{{url('jadwal_matakuliah/hapus/'.$jadwal_matakuliah->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
			</div>
		</td>	
		</tr>
		@endforeach
	</tbody>
</table>	
</div>
@stop	