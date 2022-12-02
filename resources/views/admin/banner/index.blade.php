@extends('admin.dashboard.base')
@section('title', 'Banner')
@section('content')
<div wire:id="FYQZqBk4Fb8OV0gHZfS4"
    wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;FYQZqBk4Fb8OV0gHZfS4&quot;,&quot;name&quot;:&quot;tables&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;tables&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;a7b03934&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;90698ce4f3bac754d4ff85483f5177de068f6cc8de223181875a801ddfea5824&quot;}}"
    class="">
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Banner</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <form action="">
                                <div class="card-body pb-0 pt-5 mt-3 ms-2">
                                    <div class="input-group">
                                        <input type="text" value="{{request('search')}}" name="search" class="form-control border px-3 me-3 rounded-2" style="width: 250px !important; flex:0 0 auto !important;">
                                        <button class="btn btn-info mb-0 d-flex align-items-center rounded-3"><span class="fa fa-search fa-2x me-2"></span>Search</button>
                                        <div style="flex:1 1 auto"></div>
                                        <a href="/banner/create" class="btn btn-success bg-gradient-dark mb-0 d-flex align-items-center me-2 rounded-3"><i class="material-icons text-sm">add</i>&nbsp;&nbsp;Tambah Banner </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            @if ($banner[0])
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-left text-uppercase text-xxs font-weight-bolder opacity-7">
                                                No</th>
                                            <th class="text-left text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">
                                                Judul</th>
                                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">
                                                Banner</th>
                                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">
                                                Tanggal dibuat</th>
                                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                                Tanggal diperbarui</th>
                                            <th class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                                <i class="fa fa-cog ps-2"></i></th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($banner as $row)
                                            <tr>
                                                <td scope="row" class="px-4">
                                                    <div class="d-flex  py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <p class="mb-0 text-sm">{{$loop->iteration }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $row->judul }}</h6>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset("storage/".$row->banner) }}"
                                                                class="avatar avatar-sm me-3 border-radius-lg"
                                                                alt="user1">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $row->created_at }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $row->updated_at }}</span>
                                                </td>

                                                 {{--  <td class="align-middle">
                                                    <a rel="tooltip" class="btn btn-success btn-link" href="/banner/{{ $row->id }}"method="POST">
                                                        @csrf
                                                        @method('DELETE')

                                                        <i class="material-icons">edit</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <button type="button" class="btn btn-danger btn-link"
                                                        data-original-title="" title="">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                    </button>
                                                </td>  --}}
                                                <td class="align-middle">
                                                    <form action="/banner/{{ $row->id }}" method="POST" class="delete">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div  role="group" aria-label="Basic example">
                                                            <a href="/banner/{{ $row->id }}/edit" class="btn btn-success btn-link">
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                            <button type="submit"  class="btn btn-danger" data-id="{{ $row->id }}" data-nama="{{$row->judul}}">
                                                                <i class="material-icons">close</i></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    {{ $banner->links() }}
                                @else
                                    <div class="alert alert-info mt-4" role="alert">
                                        Anda belum mempunyai data
                                    </div>
                            @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  <footer class="footer py-4  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        &
                        <a href="https://www.updivision.com" class="font-weight-bold" target="_blank">UPDIVISION</a>
                        for a better web.
                    </div>
                </div>  --}}
                {{-- <div wire:id="FYQZqBk4Fb8OV0gHZfS4" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;FYQZqBk4Fb8OV0gHZfS4&quot;,&quot;name&quot;:&quot;tables&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;tables&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;a7b03934&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;90698ce4f3bac754d4ff85483f5177de068f6cc8de223181875a801ddfea5824&quot;}}" class="">
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-2 z-index-1">
                        <div class="d-flex justify-content-center align-items-center bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                            <h3 class="text-white text-capitalize ps-3">Banner</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <form action="">
                                <div class="card-body pb-0 pt-5 mt-3 ms-2">
                                    <div class="input-group">
                                        <input type="text" value="{{request('search')}}" name="search" class="form-control border px-3 me-3 rounded-2" style="width: 250px !important; flex:0 0 auto !important;">
                                        <button class="btn btn-info mb-0 d-flex align-items-center rounded-3"><span class="fa fa-search fa-2x me-2"></span>Search</button>
                                        <div style="flex:1 1 auto"></div>
                                        <a href="/banner/create" class="btn btn-success mb-0 d-flex align-items-center me-2 rounded-3"><span class="fa fa-plus-circle fa-2x me-2"></span>Tambah Banner</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                         @if ($banner[0])
                            <table class="table table-bordered align-items-center mb-0 ">
                                <thead class="table-dark">
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                            No</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">
                                            Banner</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">
                                            Judul</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tanggal dibuat</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Tanggal diperbarui</th>


                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7"><i class="fa fa-cog ps-2"></i>
                                            </th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                             @foreach ($banner as $row)
                                    <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td> {{$row->judul}}
                                    <td><img src="upload/banner/{{$row->banner}}"alt="" width="80px" heigth="80px"></td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->updated_at}}</td>
                                    <td width="25%">
                                        <form action ="/banner/{{$row->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <div class="btn-group" role="group" aria-label="Basic example">

                                            <a href="/banner/{{$row->id}}/edit"><i class="fas fa-edit"i></i></a>
                                            <button type="submit" class="border-0 bg-transparent"><i class="fas fa-trash"i></i></button>
                                        </div>
                                        </form>
                                    </td>
                                    </tr>
                            @endforeach

                                </tbody>
                            </table>
                    {{$banner->links()}}
                    @else
                        <div class="alert alert-info mt-4" role="alert">
                            Anda belum mempunyai data
                        </div>
                    @endif
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
@push('js')
<script src="http://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('.delete').on('submit', function(e){
        e.preventDefault();// untuk menghentikan action default
        var bannerid = $(this).attr('data-id'),
            action = $(this).attr('action'), // definisikan suatu variabel action mengambil artibut action dari elemn kelas ini
            nama= $(this).attr('data-nama');
        swal({ //sweetAlet memanggil fungsi sweetAlert
                title: "Yakin ?",
                text: "Anda yakin mau hapus banner"+nama+" ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({ // ajax adalah
                        url: action,
                        method: 'DELETE',
                        data: $(this).serialize(), // serialize mengambil inputan yang ada pada form
                        success: function(response) {
                            swal("Data berhasil dihapus!", {
                                icon: "success",
                            });
                            setTimeout(()=>{
                                window.location.reload();
                            }, 500) //
                        }
                    })
                } else {
                swal("Data tidak jadi dihapus!");
                }
            });
    });
</script>
@endpush
