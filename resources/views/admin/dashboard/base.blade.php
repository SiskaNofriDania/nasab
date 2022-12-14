<!--
    =========================================================
    * Material Dashboard 2 - v3.0.0
    =========================================================

    * Product Page: https://www.creative-tim.com/product/material-dashboard
    * Copyright 2021 Creative Tim (https://www.creative-tim.com) & UPDIVISION (https://www.updivision.com)
    * Licensed under MIT (https://www.creative-tim.com/license)
    * Coded by www.creative-tim.com & www.updivision.com

    =========================================================

    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <!DOCTYPE html>
    <html lang='en' dir="{{ Route::currentRouteName() == 'rtl' ? 'rtl' : '' }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png">
        <title>
            @yield('title','Bawaan ')
        </title>

        <!-- Metas -->
        @if (env('IS_DEMO'))
            <meta name="keywords" content="creative tim, updivision, material, html dashboard, laravel, livewire, laravel livewire, alpine.js, html css dashboard laravel, material dashboard laravel, livewire material dashboard, material admin, livewire dashboard, livewire admin, web dashboard, bootstrap 5 dashboard laravel, bootstrap 5, css3 dashboard, bootstrap 5 admin laravel, material dashboard bootstrap 5 laravel, frontend, responsive bootstrap 5 dashboard, material dashboard, material laravel bootstrap 5 dashboard" />
            <meta name="description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
            <meta itemprop="name" content="Material Dashboard 2 Laravel Livewire by Creative Tim & UPDIVISION" />
            <meta itemprop="description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
            <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/600/original/material-dashboard-laravel-livewire.jpg" />
            <meta name="twitter:card" content="product" />
            <meta name="twitter:site" content="@creativetim" />
            <meta name="twitter:title" content="Material Dashboard 2 Laravel Livewire by Creative Tim & UPDIVISION" />
            <meta name="twitter:description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
            <meta name="twitter:creator" content="@creativetim" />
            <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/600/original/material-dashboard-laravel-livewire.jpg" />
            <meta property="fb:app_id" content="655968634437471" />
            <meta property="og:title" content="Material Dashboard 2 Laravel Livewire by Creative Tim & UPDIVISION" />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="https://www.creative-tim.com/live/material-dashboard-laravel-livewire" />
            <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/600/original/material-dashboard-laravel-livewire.jpg" />
            <meta property="og:description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
            <meta property="og:site_name" content="Creative Tim" />
        @endif
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />
        <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('assets') }}/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
        <style>
            .edit-foto-profil {
                position: absolute;
                    bottom: -15px;
                    right: -5px;
            }
            .edit-foto-profil i {
                background-color: var(--bs-success);
                color: var(--bs-white);
                cursor: pointer;
                align-items: center;
                display: flex;
                font-size: 10px;
                justify-content: center;
                border-radius: 50%;
                height: 25px;
                width: 25px;
            }
        </style>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="g-sidenav-show  bg-gray-200">

        @include('admin.sidebar')
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <nav class="navbar navbar-main navbar-expand-lg shadow-none border-radius-xl px-0" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 pt-2">
            <div class="collapse navbar-collapse mt-sm-0 mt-2 py-3 me-md-0 me-sm-4 bg-gradient-dark px-3" id="navbar" style="border-radius: 10px">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>
                <form method="POST" action="" class="d-none" id="logout-form">
                            @csrf
                        </form>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user me-sm-1"></i>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <div class="d-flex py-1">
                                        <a class="dropdown-item border-radius-md" href="{{route('admin.profile.index')}}">
                                            <i class="fa fa-eye me-3"></i>
                                            <b>View Profile</b>
                                        </a>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <div class="d-flex py-1">
                                        <a class="dropdown-item border-radius-md" href="{{route('admin.profile.edit')}}">
                                            <i class="fa fa-pencil me-3"></i>
                                            <b>Edit Profile</b>
                                        </a>
                                    </div>
                                </li>
                                <li class="text-center">
                                    <form action="/logout" method="POST" onsubmit="return  submitForm(this);">
                                        @csrf
                                            <button class="btn btn-danger bg-gradient-primary btn-lg w-100 mt-4 mb-0 fa-sign-out" id="btn">
                                                Log Out <i class=" fa fa-sign-out"></i></button>
                                    </form>
                            <!-- <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                     <div class="d-flex py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                 <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">View Profil</span>
                                                </h6>
                                         </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">Edit Profil</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <div class="text-center">
                                    <form action="/logout" method="POST" onsubmit="return  submitForm(this);">
                                        @csrf
                                            <button class="btn btn-danger bg-gradient-primary btn-lg w-100 mt-4 mb-0 fa-sign-out" id="btn">
                                                Log Out <i class=" fa fa-sign-out"></i></button>
                                    </form>   -->
                                </li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>


                <div wire:id="AUtIeADVy46x12gY1XXe" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;AUtIeADVy46x12gY1XXe&quot;,&quot;name&quot;:&quot;dashboard&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;c69352fd&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;f8c5c589e521ba680d6065516e4e624644997a350672a0b12b48508d60ef7927&quot;}}">
              <!-- Navbar -->
              <!-- End Navbar -->
              @yield('content')

            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ??
                                <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a> &
                                <a href="https://www.updivision.com" class="font-weight-bold" target="_blank">UPDIVISION</a>
                                for a better web.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
          </div>
          </div>

        </main>

        <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
        <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
        <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="{{ asset('assets') }}/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
          <script>
              var ctx = document.getElementById("chart-bars").getContext("2d");

              new Chart(ctx, {
                  type: "bar",
                  data: {
                      labels: ["M", "T", "W", "T", "F", "S", "S"],
                      datasets: [{
                          label: "Sales",
                          tension: 0.4,
                          borderWidth: 0,
                          borderRadius: 4,
                          borderSkipped: false,
                          backgroundColor: "rgba(255, 255, 255, .8)",
                          data: [50, 20, 10, 22, 50, 10, 40],
                          maxBarThickness: 6
                      }, ],
                  },
                  options: {
                      responsive: true,
                      maintainAspectRatio: false,
                      plugins: {
                          legend: {
                              display: false,
                          }
                      },
                      interaction: {
                          intersect: false,
                          mode: 'index',
                      },
                      scales: {
                          y: {
                              grid: {
                                  drawBorder: false,
                                  display: true,
                                  drawOnChartArea: true,
                                  drawTicks: false,
                                  borderDash: [5, 5],
                                  color: 'rgba(255, 255, 255, .2)'
                              },
                              ticks: {
                                  suggestedMin: 0,
                                  suggestedMax: 500,
                                  beginAtZero: true,
                                  padding: 10,
                                  font: {
                                      size: 14,
                                      weight: 300,
                                      family: "Roboto",
                                      style: 'normal',
                                      lineHeight: 2
                                  },
                                  color: "#fff"
                              },
                          },
                          x: {
                              grid: {
                                  drawBorder: false,
                                  display: true,
                                  drawOnChartArea: true,
                                  drawTicks: false,
                                  borderDash: [5, 5],
                                  color: 'rgba(255, 255, 255, .2)'
                              },
                              ticks: {
                                  display: true,
                                  color: '#f8f9fa',
                                  padding: 10,
                                  font: {
                                      size: 14,
                                      weight: 300,
                                      family: "Roboto",
                                      style: 'normal',
                                      lineHeight: 2
                                  },
                              }
                          },
                      },
                  },
              });


              var ctx2 = document.getElementById("chart-line").getContext("2d");

              new Chart(ctx2, {
                  type: "line",
                  data: {
                      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                      datasets: [{
                          label: "Mobile apps",
                          tension: 0,
                          borderWidth: 0,
                          pointRadius: 5,
                          pointBackgroundColor: "rgba(255, 255, 255, .8)",
                          pointBorderColor: "transparent",
                          borderColor: "rgba(255, 255, 255, .8)",
                          borderColor: "rgba(255, 255, 255, .8)",
                          borderWidth: 4,
                          backgroundColor: "transparent",
                          fill: true,
                          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                          maxBarThickness: 6

                      }],
                  },
                  options: {
                      responsive: true,
                      maintainAspectRatio: false,
                      plugins: {
                          legend: {
                              display: false,
                          }
                      },
                      interaction: {
                          intersect: false,
                          mode: 'index',
                      },
                      scales: {
                          y: {
                              grid: {
                                  drawBorder: false,
                                  display: true,
                                  drawOnChartArea: true,
                                  drawTicks: false,
                                  borderDash: [5, 5],
                                  color: 'rgba(255, 255, 255, .2)'
                              },
                              ticks: {
                                  display: true,
                                  color: '#f8f9fa',
                                  padding: 10,
                                  font: {
                                      size: 14,
                                      weight: 300,
                                      family: "Roboto",
                                      style: 'normal',
                                      lineHeight: 2
                                  },
                              }
                          },
                          x: {
                              grid: {
                                  drawBorder: false,
                                  display: false,
                                  drawOnChartArea: false,
                                  drawTicks: false,
                                  borderDash: [5, 5]
                              },
                              ticks: {
                                  display: true,
                                  color: '#f8f9fa',
                                  padding: 10,
                                  font: {
                                      size: 14,
                                      weight: 300,
                                      family: "Roboto",
                                      style: 'normal',
                                      lineHeight: 2
                                  },
                              }
                          },
                      },
                  },
              });

              var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

              new Chart(ctx3, {
                  type: "line",
                  data: {
                      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                      datasets: [{
                          label: "Mobile apps",
                          tension: 0,
                          borderWidth: 0,
                          pointRadius: 5,
                          pointBackgroundColor: "rgba(255, 255, 255, .8)",
                          pointBorderColor: "transparent",
                          borderColor: "rgba(255, 255, 255, .8)",
                          borderWidth: 4,
                          backgroundColor: "transparent",
                          fill: true,
                          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                          maxBarThickness: 6

                      }],
                  },
                  options: {
                      responsive: true,
                      maintainAspectRatio: false,
                      plugins: {
                          legend: {
                              display: false,
                          }
                      },
                      interaction: {
                          intersect: false,
                          mode: 'index',
                      },
                      scales: {
                          y: {
                              grid: {
                                  drawBorder: false,
                                  display: true,
                                  drawOnChartArea: true,
                                  drawTicks: false,
                                  borderDash: [5, 5],
                                  color: 'rgba(255, 255, 255, .2)'
                              },
                              ticks: {
                                  display: true,
                                  padding: 10,
                                  color: '#f8f9fa',
                                  font: {
                                      size: 14,
                                      weight: 300,
                                      family: "Roboto",
                                      style: 'normal',
                                      lineHeight: 2
                                  },
                              }
                          },
                          x: {
                              grid: {
                                  drawBorder: false,
                                  display: false,
                                  drawOnChartArea: false,
                                  drawTicks: false,
                                  borderDash: [5, 5]
                              },
                              ticks: {
                                  display: true,
                                  color: '#f8f9fa',
                                  padding: 10,
                                  font: {
                                      size: 14,
                                      weight: 300,
                                      family: "Roboto",
                                      style: 'normal',
                                      lineHeight: 2
                                  },
                              }
                          },
                      },
                  },
              });
        </script>
        <script>
            var win = navigator.plat form.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }

        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('assets') }}/js/material-dashboard.js?v=3.0.0"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            function submitForm(form) {
                swal({
                    title:"Yakin Mau Keluar?",
                    icon: "warning",
                    buttons:true,
                    dangerMode:true,

                })
                .then ((isOkay) =>{
                    if (isOkay) {
                        form.submit();
                    }
                });
                return false;
            }
            //     var result = confirm ('YAKIN KELUAR?');
            // if (result == false){
            //     event.preventDefault();

            // }}

        </script>
        @stack('js')
        </body>
        </html>
