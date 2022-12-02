

@extends('base')
@section('title', 'Kontak')
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
                                <h6 class="text-white text-capitalize ps-3">Edit Info</h6>
                            </div>
                        </div>
                        <div class="card-body pb-2">
                            <form action="{{ route('kontak.update', 0) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="row form-group my-4">
                                    <div class="col-1 offset-2">
                                    </div>
                                    <div class="col-7">
                                    @if (Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show text-white " role="alert">
                                            {{ Session::get('success')}}
                                        </div>
                                    @endif
                                    @if(Session::get('failed'))
                                        <div class="alert alert-danger alert-dimissible fade show text-white " role="alert">
                                            {{Session::get('failed')}}
                                        </div>
                                    @endif
                                    @foreach ($kontak as $val)
                                    <div class="row form-group mb-2">
                                        <div class="col-3">
                                            <label for="{{ Str::lower($val['judul'])}}">{{ $val['judul']}}</label>
                                        </div>
                                        <div class="col-9">
                                            <input type="text" class="form-control border" id="{{ Str::lower($val['judul']) }}" name="{{Str::lower($val['judul'])}}" value="{{old('isi')?old('isi'): $val->isi }}">
                                            @error('isi')
                                            <small class="text-danger">{{$message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    @endforeach
                                    </div>
                                </div>
                                <div class="float-end">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                            @include('sweetalert::alert')
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @endsection



















{{--



@extends('base')
@section('title','Kontak')
@section('content')
<div wire:id="FYQZqBk4Fb8OV0gHZfS4" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;FYQZqBk4Fb8OV0gHZfS4&quot;,&quot;name&quot;:&quot;tables&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;tables&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;a7b03934&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;90698ce4f3bac754d4ff85483f5177de068f6cc8de223181875a801ddfea5824&quot;}}" class="">
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-2 z-index-1">
                        <div class="d-flex justify-content-center align-items-center bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                            <h3 class="text-white text-capitalize ps-3">Kontak</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kontak.update', 0) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="row form-group my-4">
                                <div class="col-1 offset-2">
                                </div>
                                <div class="col-7">
                                @if (Session::get('success'))
                                    <div class="alert alert-success alert-dismissible fade show text-white " role="alert">
                                        {{ Session::get('success')}}
                                    </div>
                                @endif
                                @if(Session::get('failed'))
                                    <div class="alert alert-danger alert-dimissible fade show text-white " role="alert">
                                        {{Session::get('failed')}}
                                    </div>
                                @endif
                                @foreach ($kontak as $val)
                                <div class="row form-group mb-2">
                                    <div class="col-3">
                                        <label for="{{ Str::lower($val['judul'])}}">{{ $val['judul']}}</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="text" class="form-control border" id="{{ Str::lower($val['judul']) }}" name="{{Str::lower($val['judul'])}}" value="{{old('isi')?old('isi'): $val->isi }}">
                                        @error('isi')
                                        <small class="text-danger">{{$message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="float-end">
                            <button type="submit" class="btn btn-success btn-sm">Save</button>
                        </div>
                        @include('sweetalert::alert')
                    </form>
                </div>
            </div>
     </div>

</div>
 @endsection  --}}






