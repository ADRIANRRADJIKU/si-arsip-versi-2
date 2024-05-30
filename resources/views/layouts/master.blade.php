<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMAP | KPU BONBOL</title>
    <!-- <link rel="shortcut icon"
        href="data:image/svg+xml,%3csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2033%2034'%20fill-rule='evenodd'%20stroke-linejoin='round'%20stroke-miterlimit='2'%20xmlns:v='https://vecta.io/nano'%3e%3cpath%20d='M3%2027.472c0%204.409%206.18%205.552%2013.5%205.552%207.281%200%2013.5-1.103%2013.5-5.513s-6.179-5.552-13.5-5.552c-7.281%200-13.5%201.103-13.5%205.513z'%20fill='%23435ebe'%20fill-rule='nonzero'/%3e%3ccircle%20cx='16.5'%20cy='8.8'%20r='8.8'%20fill='%2341bbdd'/%3e%3c/svg%3e"
        type="image/x-icon"> -->
    <link rel="icon"
    href="https://jdih.kpu.go.id/images/796px-KPU_Logo.svg.png"
        >
    <link rel="stylesheet" crossorigin href="{{asset('assets/compiled/css/app.css')}}">
    <link rel="stylesheet" crossorigin href="{{asset('assets/compiled/css/app-dark.css')}}">
    <link rel="stylesheet" crossorigin href="{{asset('assets/compiled/css/iconly.css')}}">
    <link rel="stylesheet" href="{{asset("assets/extensions/sweetalert2/sweetalert2.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/extensions/simple-datatables/style.css")}}">
    <link rel="stylesheet" crossorigin href="{{asset("assets/compiled/css/table-datatable.css")}}">
    <link rel="stylesheet" href="/assets/app.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/fa619c5b88.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <script src="{{asset('assets/static/js/initTheme.js')}}"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="dropdown show d-sm-none">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  <li class="menu-item dropdown-item ">
                                <a href="{{Route("account.dashboard")}}" class='menu-link'>
                                    <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item dropdown-item ">
                                <a href="{{Route("management-arsip.index")}}" class='menu-link'>
                                    <span><i class="bi bi-table"></i> Data Arsip</span>
                                </a>
                            </li>
                            @if (Auth::check())    
                            <li class="menu-item dropdown-item ">
                                    <a href="{{Route("kategori.index")}}" class='menu-link'>
                                        <span><i class="bi bi-stack"></i> Data Kategori</span>
                                    </a>
                                </li>
                                <li class="menu-item dropdown-item ">
                                    <a href="{{Route("management-pegawai.index")}}" class='menu-link'>
                                        <span><i class="bi bi-table"></i> Data Pegawai</span>
                                    </a>
                                </li>
                                
                                <li class="menu-item dropdown-item ">
                                    <a href="{{Route("management-admin.index")}}" class='menu-link'>
                                        <span><i class="bi bi-table"></i> Data Petugas</span>
                                    </a>
                                </li>
                                <li class="menu-item dropdown-item ">
                                <a href="{{Route("account.profile")}}" class='menu-link'>
                                    <span><i class="bi bi-table"></i> Profile</span>
                                </a>
                            </li>
                            @endif
  </div>
</div>
                        <div class="logo" style="margin: ; display: flex; align-items: center;">
                        <a href="{{route('account.dashboard')}}" class="btn btn-ghost d-none d-sm-block"><img src="/back.png" style="height: 20px; object-fit: cover;" alt=""></a>
                        <img src="https://th.bing.com/th/id/OIP.8sjMWRuI6eYhYPq2S27dmgHaFQ?rs=1&pid=ImgDetMain" style="width: 50px; object-fit: cover; height: auto;">
                        <div style="display: flex; flex-direction: column;">
                            <a href="/" class="fw-bold" style="width: fit-content; display: block;text-align: start; line-height: 1;">SIMAP</a>
                            <small style="font-size: 14px; line-height: 1;" class="d-none d-sm-block">Sistem Informasi Manajemen Arsip</small>
                        </div>
                        </div>
                        @auth
                        <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>
                        @else
                        <a href="{{route('account.login')}}" class="btn btn-primary">Login</a>
                        @endauth
                    </div>
                </div>
               
                <nav class="main-navbar" style="background: #D9241D;">
                    <div class="container">
                        <ul>
                            <li class="menu-item  ">
                                <a href="{{Route("account.dashboard")}}" class='menu-link'>
                                    <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                                </a>
                            </li>
                            <li class="menu-item  ">
                                <a href="{{Route("management-arsip.index")}}" class='menu-link'>
                                    <span><i class="bi bi-table"></i> Data Arsip</span>
                                </a>
                            </li>
                            @if (Auth::check())    
                                <li class="menu-item  ">
                                    <a href="{{Route("kategori.index")}}" class='menu-link'>
                                        <span><i class="bi bi-stack"></i> Data Kategori</span>
                                    </a>
                                </li>
                                <li class="menu-item  ">
                                    <a href="{{Route("management-pegawai.index")}}" class='menu-link'>
                                        <span><i class="bi bi-table"></i> Data Pegawai</span>
                                    </a>
                                </li>
                                
                                <li class="menu-item  ">
                                    <a href="{{Route("management-admin.index")}}" class='menu-link'>
                                        <span><i class="bi bi-table"></i> Data Petugas</span>
                                    </a>
                                </li>
                                <li class="menu-item  ">
                                <a href="{{Route("account.profile")}}" class='menu-link'>
                                    <span><i class="bi bi-table"></i> Profile</span>
                                </a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </nav>

            </header>

            <div class="container">
                @yield('content')
            </div>
            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>{{date("Y")}} | SISTEM INFORMASI MANAJEMEN ARSIP DIGITAL</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><a
                                    href="">💗 Untuk KPU Bone Bolango</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('assets/static/js/components/dark.js')}}"></script>
    <script src="{{asset('assets/static/js/pages/horizontal-layout.js')}}"></script>
    <script src="{{asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/compiled/js/app.js')}}"></script>
    <script src="{{asset('assets/extensions/simple-datatables/umd/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/static/js/pages/simple-datatables.js')}}"></script>
</body>

</html>
