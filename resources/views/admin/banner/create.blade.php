
@extends('base')
@section('title', 'Tambah Banner')
@section('content')
    <div wire:id="zpbpevv9rfz89k3wC0tA"
        wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;zpbpevv9rfz89k3wC0tA&quot;,&quot;name&quot;:&quot;tables&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;tables&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;8620303a&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;f3bdba40ad7d123da4b53396d60ec11e61d600c044db516a60cf07f511516003&quot;}}"
        class="">


        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tambah Banner</h6>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <form action="/banner" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12 col-md-3">
                                        <img src="img" id="img" width="100%"  alt=""/>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <div class="row form-group my-4">
                                            <div class="col-1">
                                                <label for="judul">judul</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="text" class="form-control border" id="judul" name="judul" value="{{ old('judul') }}">
                                                @error('judul')
                                                    <small class="text-danger">{{ $message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row form-group mb-4">
                                            <div class="col-1">
                                                <label for="Banner">Banner</label>
                                            </div>
                                            <div class="col-10">
                                                <input type="file" class="form-control border" id="banner" name="banner" >
                                                @error('banner')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-end">
                                <button type="submit" class="btn btn-success btn-sm">Tambah</button>
                                <a href="/banner" class="btn btn-secondary btn-sm">Kembali</a>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



{{--  @extends('base')
@section('title','Kelola Pengguna Utama')
@section('content')
<div wire:id="FYQZqBk4Fb8OV0gHZfS4" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;FYQZqBk4Fb8OV0gHZfS4&quot;,&quot;name&quot;:&quot;tables&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;tables&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;a7b03934&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;90698ce4f3bac754d4ff85483f5177de068f6cc8de223181875a801ddfea5824&quot;}}" class="">
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-2 z-index-1">
                        <div class="d-flex justify-content-center align-items-center bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                            <h3 class="text-white text-capitalize ps-3">Banner</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/banner" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row form-group my-4">
                                <img src="img" id="img" onchange='img' width="100%px"  alt="">
                                <div class="col-1 offset-2">
                                    <label for="judul">judul</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" class="form-control border" id="judul" name="judul" value="{{ old('judul') }}">
                                    @error('judul')
                                        <small class="text-danger">{{ $message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group mb-4">
                                <div class="col-1 offset-2">
                                    <label for="Banner">Banner</label>
                                </div>
                                <div class="col-7">
                                    <input type="file" class="form-control border" id="banner" name="banner" >
                                    @error('banner')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="float-end">
                            <button type="submit" class="btn btn-success btn-sm">Tambah</button>
                            <a href="/banner" class="btn btn-secondary btn-sm">Kembali</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection  --}}

 @push('js')
    <script>
        $(function(){
            $('#banner').change(function(){
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






