@extends('layouts.master')


@section('addCss')
  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css')}}">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('addJavascript')
  <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    $(function() {
            $("#data-table").DataTable();
        })
        AOS.init();

  </script>
  <script>
    var array = [];

   const data = {
  labels: [
    'Red',
    'Blue',
    'Yellow'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [
        300,
        50,
        100,
        50],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
      'rgb(255, 205, 86)'
    ],
    hoverOffset: 4
  }]
    };
  </script>
  <script>
        var myDate = new Date();
        var hrs = myDate.getHours();

        var greet;

            if (hrs < 11)
            greet='Selamat Pagi!!!';
            else if(hrs >= 11 && hrs <=14)
            greet='Selamat Siang!!!';
            else if(hrs >= 14 && hrs <=18)
            greet='Selamat Sore!!!';
            else if(hrs >=18 && hrs <=24)
            greet='Selamat Malam!!!';

        document.getElementById('lblGreetings2').innerHTML = '<b>' + greet;
  </script>
@endsection
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Dashboard</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
        <div class="p-5 mb-4" style="border-radius: 10px; background: rgb(144,138,247);
        background: linear-gradient(175deg, rgba(144,138,247,1) 0%, rgba(0,255,243,1) 100%);">
            <div class="container-fluid py-5">
                <h1 class="text-white" id="lblGreetings2"></h1>
                <h1 class="display-5 fw-bold text-white">Halloo.. {{Auth::user()->name}}, Apa Kabar?</h1>
                <p class="col-md-8 fs-4 text-white">Hadapi setiap rintangan dan jangan pernah kehilangan harapan. Karena ketika memiliki harapan, di saat itulah kamu memiliki masa depan</p>
                <p class="col-md-8 fs-4 text-white">Tetap Semangatt!! Dan Selalu Produktif.</p>
            </div>
        </div>
        <div class="container-card px-4">
            <section class="py-5">
                <div class="container px-4 py-5" id="custom-cards">
                  <h2 class="pb-2 border-bottom" data-aos="fade-up" data-aos-duration="1000">Data Sekolah</h2>

                  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5" data-aos="fade-up"
                    data-aos-duration="1000">
                    <div class="col">
                        <div class="card card-cover inner h-100 overflow-hidden text-white bg-white shadow-lg px-4 pb-4"
                        style=" background-size: cover; background-position: center center; border-radius: 20px;">
                        <img class="pt-5 pb-4"src="{{asset('img/mapel.svg')}}" alt="">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1" style="border-radius: 20px; background-color: #88c2ff;">
                          <a class="text-light" href="{{route('daftarMapel')}}">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-light">Daftar Mapel</h2>
                            <p class="col-md-8 fs-4 text-white">Berisi Daftar Mata Pelajaran</p>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card card-cover inner h-100 overflow-hidden text-white bg-white shadow-lg px-4 pb-4"
                        style=" background-size: cover; background-position: center center; border-radius: 20px;">
                        <img class="pt-5 pb-4" src="{{asset('img/jurusan.svg')}}" alt="">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1" style="border-radius: 20px; background-color: #88c2ff;">
                          <a class="text-light" href="{{route('daftarJurusan')}}">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-light">Daftar Jurusan</h2>
                            <p class="col-md-8 fs-4 text-white">Berisi Daftar Semua Jurusan</p>
                          </a>
                        </div>
                      </div>
                    </div>

                    <div class="col">
                      <div class="card card-cover inner h-100 overflow-hidden text-white bg-white shadow-lg px-4 pb-4"
                        style=" background-size: cover; background-position: center center; border-radius: 20px;">
                        <img class="pt-5 pb-4" src="{{asset('img/siswa.svg')}}" alt="">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1" style="border-radius: 20px; background-color: #88c2ff;">
                          <a class="text-light" href="{{route('daftarSiswa')}}">
                            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold text-light">Daftar Siswa</h2>
                            <p class="col-md-8 fs-4 text-white">Berisi Data-data Siswa</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </section>
        </div>
	</div><!-- /.container-fluid -->
</div>


<!-- /.content -->
  <div class="card m-5 " style="border-radius: 15px;">
    <div class="card-body px-4 py-3">
        <table class="table table-hover mb-0" id="data-table">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama Siswa</th>
              <th>Alamat</th>
              <th>Jurusan</th>
              <th>Deskripsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datas as $data)
              <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td>{{ $data->nama_siswa}}</td>
                    <td>{{ $data->alamat}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->deskripsi}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
@endsection
