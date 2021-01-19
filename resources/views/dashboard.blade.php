<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Ample lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Ample admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Monitoring Server</title>
    {{-- <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" /> --}}
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{asset('plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css" integrity="sha512-C7hOmCgGzihKXzyPU/z4nv97W0d9bv4ALuuEbSf6hm93myico9qa0hv4dODThvCsqQUmKmLcJmlpRmCaApr83g==" crossorigin="anonymous" />
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>
    
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    
                    <a class="navbar-brand" href="/">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="{{asset('plugins/images/logo-icon.png')}}" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <h3 style="color: black">Monitoring Server</h3>
                            {{-- <img src="{{asset('plugins/images/logo-text.png')}}" alt="homepage" /> --}}
                        </span>
                    </a>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="/tentang"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Tentang Aplikasi</span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>


        <div class="page-wrapper">

            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title text-uppercase font-medium font-14">Dashboard</h4>
                    </div>

                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="container-fluid">

                <h2 class="text-center">IMPLEMENTASI METODE FAILOVER SEBAGAI BACKUP SERVER <br> PADA ARSITEKTUR LOAD BALANCER</h2> <br>
                
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Request Yang Di Proses Load Balancer 1</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ml-auto">
                                    <span class="counter text-success"> <div id="lb1"></div></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Request Yang Di Proses Load Balancer 2</h3>
                            <ul class="list-inline two-part d-flex align-items-center mb-0">
                                <li>
                                    <div id="sparklinedash3"><canvas width="67" height="30"
                                            style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                                    </div>
                                </li>
                                <li class="ml-auto"><span class="counter text-info"> <div id="lb2"></div> </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Tabel Hasil Pengujian</h3>
                            {{-- <p class="text-muted">Add class <code>.table</code></p> --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No</th>
                                            <th class="border-top-0">Nama Server</th>
                                            <th class="border-top-0">Request Masuk</th>
                                            <th class="border-top-0">Response Time (ms)</th>
                                            {{-- <th class="border-top-0">Role</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Server 1</td>
                                            <td> <div id="server1"></div></td>
                                            <td> <div id="response1"></div></td>
                                            {{-- <td>admin</td> --}}
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Server 2</td>
                                            <td> <div id="server2"></div></td>
                                            <td> <div id="response2"></div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-6">
                        <div class="white-box">
                            <canvas id="RequestTotal" width="400" height="400"></canvas>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="white-box">
                            <canvas id="ResponseTime" width="400" height="400"></canvas>
                        </div>
                    </div>

                </div>
                
                {{-- <div id="demo">Hello</div> --}}
               
            </div>

            <footer class="footer text-center"> 2021 © Rekayasa Sistem Komputer

            </footer>

        </div>
    </div>

    <script>
        
        $.ajax({
            dataType: "json",
            type: "GET",
            url: '/api/lb1',
            success: function (data) {
                var total_requestslb1 = data.general.total_requests
                $('#lb1').append(total_requestslb1);
                // dataRequest.push(total_requestslb1);
            }
        })

        $.ajax({
            dataType: "json",
            type: "GET",
            url: '/api/lb2',
            success: function (data) {
                var total_requestslb2 = data.general.total_requests
                $('#lb2').append(total_requestslb2);
                // dataRequest.push(total_requestslb2);
            }
        });

        var requestServer1;
        var timeServer1;
        var ajaxTime1= new Date().getTime();
        $.ajax({
            dataType: "json",
            type: "GET",
            async : false,
            url: '/api/server1',
            success: function (data) {
                var total_requests1 = data.general.total_requests
                $('#server1').append(total_requests1);
                // dataRequest.push(total_requests1);
                requestServer1 = data.general.total_requests;
            }
        }). done(function() {
            var totalTime1 = new Date().getTime()-ajaxTime1;
            $('#response1').append(totalTime1);
            timeServer1 = totalTime1;
        });

        var requestServer2;
        var timeServer2;
        var ajaxTime2= new Date().getTime();
        $.ajax({
            dataType: "json",
            type: "GET",
            async : false,
            url: '/api/server2',
            success: function (data) {
                var total_requests2 = data.general.total_requests;
                requestServer2 = data.general.total_requests;
                $('#server2').append(total_requests2);
            }
        }). done(function() {
            var totalTime2 = new Date().getTime()-ajaxTime2;
            $('#response2').append(totalTime2);
            timeServer2 = totalTime2;
        });


        var ctx = document.getElementById('RequestTotal');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Server 1', 'Server 2'],
                datasets: [{
                    label: '# Jumlah Request',
                    data: [requestServer1,requestServer2],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

   


        var clb = document.getElementById('ResponseTime');
        var myChart2 = new Chart(clb, {
            type: 'bar',
            data: {
                labels: ['Server 1', 'Server 2'],
                datasets: [{
                    label: '# Response Time',
                    data: [timeServer1, timeServer2],
                    backgroundColor: [
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>



    <script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('plugins/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/app-style-switcher.js')}}"></script>
    <script src="{{asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('js/custom.js')}}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{asset('plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{asset('plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('js/pages/dashboards/dashboard1.js')}}"></script>
</body>

</html>