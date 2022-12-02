@extends("admin.dashboard.base")
@section('title','Edit Profil Admin')
@section("content")
        <!-- Navbar -->
        <!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-2 z-index-1">
                    <div class="bg-gradient-primary d-flex justify-content-center align-items-center shadow-primary border-radius-lg pt-3 pb-2">
                        <h3 class="text-white text-capitalize ps-3">Edit Profil</h3>
                    </div>
                    @if($errors -> any())
                        {!! implode('',$errors -> all('
                        <div class="alert alert-danger text-white">
                            :message
                        </div>')) !!}
                    @endif
                    </div>
                <div class="card-body p-3 px-3">
                    <form action="/admin/profile/update" method="POST" enctype="multipart/form-data" style="margin-left:250px">
                        @csrf
                        @method('patch')
                        <div class="row my-5">
                            <div class="col-2 align-middle">
                                <div class="d-flex justify-content-center">
                                    <img style="margin:auto; object-fit:cover; width: 150px !important; height: 150px !important;" id="img" src="{{ asset('assets') }}/img/marie.jpg" alt="your image" class="rounded-circle">
                                </div>
                                <div class="d-flex justify-content-center mt-2">
                                    <label class="custom-file-upload rounded-3">
                                        <input type="file" name="foto_profil" id="upload" onchange='readURL(this.value)'/>
                                        PILIH FOTO
                                    </label>
                                </div>
                            </div>
                            <div class="col-5" style="margin-left:130px">
                                <div class="row g-3 justify-content-center">
                                    {{-- baris --}}
                                    <div class="col-4">
                                        <label for="input" class="col-form-label"style="color:green"><b>Username</b></label>
                                    </div>
                                    <div class="col-7">
                                        <input value="{{Auth::guard('admin')->user()->username}}" type="text" name="username" class="form-control px-1 border">
                                    </div>
                                    <div class="col-4">
                                        <label for="input" class="col-form-label"style="color:green"><b>Kontak</b></label>
                                    </div>
                                    <div class="col-7">
                                        <input value="{{Auth::guard('admin')->user()->kontak}}" type="text" name="kontak" class="form-control px-1 border">
                                    </div>
                                    <div class="col-4">
                                        <label for="input" class="col-form-label"style="color:green"><b>Password</b></label>
                                    </div>
                                    <div class="col-7 g-3 align-items-center">
                                        <div class="form-group">
                                            <div class="input-group border" id="show_hide_password">
                                                <input value="" name="password" class="form-control px-1 border" type="password">
                                            <div class="input-group-addon pt-2">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-12">
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button type="submit" class="btn btn-lg bg-gradient-dark mt-2 me-4">Save</button>
                                            </div>
                                        </div>
                                </div>
                            </div>

                        </div>
                    </div>
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
        $(function(){
            $('#upload').change(function(){
                var input = this;
                var url = $(this).val();
                var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg"))
                {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                    $('#img').attr('src', e.target.result);
                    }
                reader.readAsDataURL(input.files[0]);
                }
                else
                {
                $('#img').attr('src', '/assets/no_preview.png');
                }
            });
        });
    </script>
@endpush
