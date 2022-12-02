<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" http://127.0.0.1:8000/dashboard ">
                <img src="http://127.0.0.1:8000/assets/img/logo nasab.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-2 font-weight-bold text-white">WEB NASAB</span>
            </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
        <li class="nav-item">
                <a class="nav-link text-white  {{ Route::currentRouteName() == 'users.dashboard.index' ? ' active bg-gradient-primary' : '' }}"
                    href="/">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white  {{ Route::currentRouteName() == 'admin.tree.index' ? ' active bg-gradient-primary' : '' }}"
                    href="/tree">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class=" fa fa-sitemap ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tree</span>
                </a>
            </li>
             <li class="nav-item">
                <a class="nav-link text-white  "
                    href="http://127.0.0.1:8000/kelola-data">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="fa fa-pencil-square-o ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kelola Data</span>
                </a>
            </li>
            <li class="nav-item has-submenu" >
                <a class="nav-link text-white  {{ Route::currentRouteName() == 'admin.submenu.index' ? ' active bg-gradient-primary' : '' }}"
                href="#collapseExample" data-bs-toggle="collapse">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i  style="font-size: 1.2rem;"  <i class="large material-icons">chrome_reader_mode</i></i>

                    </div>
                    <span class="nav-link-text ms-1 text-center" >Landing Page</span>

                </a>
                <ul class="collapse nav-item" id="collapseExample" style="list-style: none">
                    <li  class="nav-item"> <a href="/banner" class="nav-link">Beranda</a></li>
                    <li><a href="info" class="nav-link">Info</a></li>
                    <li><a href="kontak" class="nav-link">Kontak</a></li>
                    <li><a href="tentang" class="nav-link">Tentang</a></li>
                </ul>
            </li>

        </ul>
    </div>


    </div>
</aside>
