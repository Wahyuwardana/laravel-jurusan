@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Edit</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>

				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">

		{{-- main content here --}}
        <div class="card">
            <div class="card-body">
                <form action="{{ route('updateSiswa', ['id' => $siswa->id]) }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="nama">Nama Jurusan</label>
                        <select class="form-control" name="id_jurusan" id="id_jurusan" required="required">
                            @foreach ($jurusans as $jurusan)
                                <option value="{{$jurusan->id}}" {{$jurusan->id == $siswa->id_jurusan ? 'selected' : ''}}>{{$jurusan->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Siswa</label>
                        <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" required="required" value="{{ $siswa->nama_siswa}}" placeholder="Masukan Nama Siswa">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Alamat</label>
                        <input type="text" name="alamat" id="alamat" rows="3" class="form-control" required="required" placeholder="Masukan Deskripsi">
                    </div>
                        <div class="text-right">
                            <a href="{{route('daftarSiswa')}}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        <div class="card-body p-0">

                        </div>
                </form>
            </div>
        </div>

	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection
