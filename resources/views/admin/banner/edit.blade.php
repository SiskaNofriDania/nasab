@extends('base')
@section('title', 'Edit Banner')
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
                                <h6 class="text-white text-capitalize ps-3">Edit Banner</h6>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <form action="/banner/{{$banner->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="{{ asset("storage/".$banner->banner) }}" width="200%px"  alt="">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="row form-group my-4">
                                            <div class="col-1 offset-2">
                                                <label for="judul">Banner</label>
                                            </div>
                                            <div class="col-7">
                                                <input type="text" class="form-control border" id="judul" name="judul" value="{{old('judul') ? old('judul') : $banner->judul}}">
                                                @error('judul')
                                                    <small class="text-danger">{{ $message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row form-group mb-4">
                                            <div class="col-1 offset-2">
                                                <label for="Banner">Judul</label>
                                            </div>
                                            <div class="col-7">
                                                <input type="file" class="form-control border" id="banner" name="banner">
                                                @error('banner')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-end">
                                <button type="submit" class="btn btn-success btn-sm">Edit</button>
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
