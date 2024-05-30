@extends('layouts.master', ['title' => 'Dashboard | Manajement Surat'])
@section('content')
<div class="page-heading">
        <h3 class="text-center">Dokumen apa yang Anda cari?</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-12">
                @if (Auth::check())
                <div class="alert alert-info">
                        Selamat Datang, <strong>{{ Auth::user()->name }}</strong>
                    </div>
                    @endif
                <div style="background: url(/kantor.webp); background-position:center;" class="pt-3 px-5">
                <form action="{{route('management-arsip.index')}}" class="form-inline center" style="gap: 5px">
                    <input type="text" name="search" class='form-control shadow' placeholder="Search...">
                    <button class="btn btn-primary btn-md">Cari</button>
                </form>
                @if (Auth::check())
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <i class="bi bi-files text text-primary fs-4"></i>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7 mt-4">
                                        <h6 class="text-muted font-semibold">Total Arsip Digital</h6>
                                        <h6 class="font-extrabold mb-0">{{ $arsip }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <i class="bi bi-file-earmark-text text-primary fs-4"></i>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7 mt-4">
                                        <h6 class="text-muted font-semibold">Kategori</h6>
                                        <h6 class="font-extrabold mb-0">{{ $kategori }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <i class="bi bi-person text-primary fs-3"></i>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7 mt-4">
                                        <h6 class="text-muted font-semibold">Petugas</h6>
                                        <h6 class="font-extrabold mb-0">{{ $admin }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
            <div class="row" style="gap: 10px; padding-top: 30px;">
                    <div class="col-md center">
                        <div class="card shadow" style="width: 18rem;">
                        <h5 style="min-height: 80px;" class="card-img-top bg-primary center text-center text-white">
                        <i class="fa fa-book" style="font-size: 40px;"></i>
                    </h5>
                    <a href="{{route('management-arsip.index')}}?search={{urlencode("Keuangan, Umum, & Logistik")}}">
                        <div class="card-body">
                            <p class="card-text text-center underline-on-hover">Keuangan, Umum, & Logistik</p>                        </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-md center">
                        <div class="card shadow" style="width: 18rem;">
                            <h5 style="min-height: 80px;" class="card-img-top bg-danger center text-center text-white">
                                <i class="fa fa-book" style="font-size: 40px;"></i>
                            </h5>
                            <a href="{{route('management-arsip.index')}}?search=Perencanaan, Data dan Informasi">

                            <div class="card-body">
                                <p class="card-text text-center underline-on-hover">Perencanaan, Data dan Informasi</p>
                            </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-md center">
                        <div class="card shadow" style="width: 18rem;">
                            <h5 style="min-height: 80px;" class="card-img-top bg-info center text-center text-white">
                                <i class="fa fa-book" style="font-size: 40px;"></i>
                            </h5>
                            <a href="{{route('management-arsip.index')}}?search=Hukum dan Sumber Daya Manusia">

                            <div class="card-body">
                                <p class="card-text text-center underline-on-hover">Hukum dan Sumber Daya Manusia</p>
                            </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-md center">
                        <div class="card shadow" style="width: 18rem;">
                            <h5 style="min-height: 80px;" class="card-img-top bg-success center text-center text-white">
                                <i class="fa fa-book" style="font-size: 40px;"></i>
                            </h5>
                            <a href="{{route('management-arsip.index')}}?search={{"Teknis Penyelengaraan Pemilu dan Hubungan Masyarakat"}}">

                            <div class="card-body">
                                <p class="card-text text-center underline-on-hover">Teknis Penyelengaraan Pemilu dan Hubungan Masyarakat</p>
                            </div>
                            </a>

                        </div>
                    </div>
                </div>

                @endif
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Statistik Arsip {{ date('Y') }}</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <h3 class="text-center">Arsip Terbaru</h3>
            <div class="row">

                @foreach($latest as $i)
                <div class="col-md-6">
                <div class="card">
  <div class="card-body">
    <a  href="{{route('management-arsip.show', ['management_arsip' => $i->uuid])}}">    <h5 class="card-title">{{$i->title}}</h5>
</a>
    <h6 class="card-subtitle mb-2 text-muted">{{$i->created_at}}</h6>
    <p class="card-text">{{$i->deskripsi}}</p>
  </div>
</div>
                </div>
                
            @endforeach
            </div>
        </div>
    </div>

    <script src="{{asset('assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script>
        async function fetchData(params) {
            
            const datas  = await fetch('{{Route("statistik.arsip")}}')
            const response = await datas.json()
            console.log(response);
            var optionsProfileVisit = {
                annotations: {
                    position: "back",
                },
                dataLabels: {
                    enabled: false,
                },
                chart: {
                    type: "bar",
                    height: 300,
                },
                fill: {
                    opacity: 1,
                },
                plotOptions: {},
                series: [{
                    name: "Arsip Digital",
                    data: [response[0].count, response[1].count, response[2].count, response[3].count, response[4].count, response[5].count, response[6].count, response[7].count, response[8].count, response[9].count, response[10].count, response[11].count],
                }, ],
                colors: "#435ebe",
                xaxis: {
                    categories: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                },
            };
            var chartProfileVisit = new ApexCharts(
                document.querySelector("#chart-profile-visit"),
                optionsProfileVisit
            );
            chartProfileVisit.render()
        } 
        fetchData()  
    </script>
@endsection

  