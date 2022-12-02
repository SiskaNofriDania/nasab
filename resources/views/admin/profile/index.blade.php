@extends("admin.dashboard.base")
@section('title','View Profil Admin')
@section("content")
        <!-- Navbar -->
        <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-2 z-index-1">
                    <div class="bg-gradient-primary d-flex justify-content-center align-items-center shadow-primary border-radius-lg pt-3 pb-2">
                        <h3 class="text-white text-capitalize ps-3">View Profil</h3>
                    </div>
              <div class="card-body p-3 px-3">
                  <form style="margin-left:240px">
                    <div class="row my-5">
                      <div class="col-2 align-middle">
                         <div class="d-flex justify-content-center">
                            <img style="margin-left:125px; object-fit:cover; width: 150px !important; height: 150px !important;" id="img" src="{{ asset('assets') }}/img/marie.jpg" alt="your image" class="rounded-circle">
                          </div>
                        </div>
                        <div class="col-5" style="margin-left:150px">
                                <div class="row g-3 justify-content-center">
                                    {{-- baris --}}
                                    <div class="col-4">
                                        <label for="input" class="col-form-label" style="color:green"><b>Username</b></label>
                                    </div>
                                    <div class="col-7">
                                        <label for="input" class="col-form-label">: {{Auth::guard('admin')->user()->username}}</label>
                                    </div>
                                    <div class="col-4">
                                        <label for="input" class="col-form-label" style="color:green"><b>Password</b></label>
                                    </div>
                                    <div class="col-7">
                                        <label for="input" class="col-form-label">: ********</label>
                                    </div>
                                    <div class="col-4">
                                        <label for="input" class="col-form-label" style="color:green"><b>Kontak</b></label>
                                    </div>
                                    <div class="col-7">
                                        <label for="input" class="col-form-label">: {{Auth::guard('admin')->user()->kontak}}</label>
                                    </div>

                                </div>
                            </div>



@endsection
@push('js')
