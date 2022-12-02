@extends('base')
@section('title','login')
@section('content')
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-12 mx-auto">
                <div class="card z-index-0 fadeIn3 fadeInBottom">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                            <div class="d-flex justify-content-center align-items-center">
                                <img style="margin:auto; object-fit:cover; width: 140px !important; height: 140px !important;" src="http://127.0.0.1:8000/assets/img/logo nasab.png" alt="main_logo" class="rounded-circle img">
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <h6 class="text-white font-weight-bolder text-center mt-0 mb-1">LOGIN TO WEB NASAB</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('loginauth')}}" role="form" class="text-start">
                            @csrf
                            <tbody>
                                <tr>
                                    @if (session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{session('error')}}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <td colspan="5" class="pt-3 pb-3">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <div class="field-placeholder">Username<span
                                                class="text-danger"></span></div>
                                            <div class="input-group">
                                                <input name="username" onchange="" id="username" class="form-control mb-3 border" type="text">
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->

                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td colspan="5" class="pt-3 pb-3">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <div class="field-placeholder">Password<span
                                                class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group border" id="show_hide_password">
                                                    <input class="form-control px-1 border" name="password" type="password">
                                                    <div class="input-group-addon pt-2">
                                                    <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </td>
                                </tr>
                            </tbody>

                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">LOGIN</button>
                            </div>
                            <div class="col-12">
                                <div class="d-grid gap-2 d-md-flex">
                                    <div class="d-flex align-items-center">
                                        <input type="checkbox" id="remember" name="remember" class="form-check border" value="1">
                                        <label for="remember" class="col-form-label">Remember me</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if($('#show_hide_password input').attr("type") == "text"){
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass( "fa-eye-slash" );
                    $('#show_hide_password i').removeClass( "fa-eye" );
                }else if($('#show_hide_password input').attr("type") == "password"){
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass( "fa-eye-slash" );
                    $('#show_hide_password i').addClass( "fa-eye" );
                }
            });
        });
    </script>
@endpush
