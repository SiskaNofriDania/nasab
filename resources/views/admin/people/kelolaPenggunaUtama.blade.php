@extends('admin.dashboard.base')
@section('title','Kelola Pengguna Utama')
@section('content')
<div wire:id="FYQZqBk4Fb8OV0gHZfS4" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;FYQZqBk4Fb8OV0gHZfS4&quot;,&quot;name&quot;:&quot;tables&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;tables&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;a7b03934&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;90698ce4f3bac754d4ff85483f5177de068f6cc8de223181875a801ddfea5824&quot;}}" class="">
    <!-- Navbar -->
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-2 z-index-1">
                        <div class="d-flex justify-content-center align-items-center bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                            <h3 class="text-white text-capitalize ps-3">Kelola Data</h3>
                            {{ $auth }}
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
                                        <a href="{{route('user_nasab.tambahNasab')}}" class="btn btn-success mb-0 d-flex align-items-center me-2 rounded-3"><span class="fa fa-plus-circle fa-2x me-2"></span>Tambah Pengguna Utama</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table table-bordered align-items-center mb-0 ">
                                <thead class="table-dark">
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                            No</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">
                                            Nama</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">
                                            Kontak</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tanggal Lahir</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Tahun Lahir</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">
                                            Tanggal Wafat</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Tahun Wafat</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Pekerjaan</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Jenis Kelamin</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Nama Ayah</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Nama Ibu</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7">
                                            Alamat</th>
                                        <th
                                            class="text-center text-uppercase text-xxs font-weight-bolder opacity-7"><i class="fa fa-cog ps-2"></i>
                                            </th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($people as $p)
                                        <tr>
                                            <td class="align-middle">
                                                <h6 class="mb-0 text-sm text-center">{{$p->iteration+1}}</h6>
                                            </td>
                                            <td class="align-middle">
                                                <h6 class="mb-0 text-sm text-center">{{$p->nama}}</h6>
                                            </td>
                                            <td class="align-middle">
                                                <h6 class="mb-0 text-sm text-center">{{$p->kontak}}</h6>
                                            </td>
                                            <td class="align-middle">
                                                <h6 class="mb-0 text-sm text-center">{{$p->tanggal_lahir}}</h6>
                                            </td>
                                            <td class="align-middle">
                                                <h6 class="mb-0 text-sm text-center">{{$p->tahun_lahir}}</h6>
                                            </td>
                                            <td class="align-middle">
                                                <h6 class="mb-0 text-sm text-center">{{$p->tanggal_wafat}}</h6>
                                            </td>
                                            <td class="align-middle">
                                                <h6 class="mb-0 text-sm text-center">{{$p->tahun_wafat}}</h6>
                                            </td class="align-middle">
                                            <td class="align-middle text-center">
                                                <h6 class="mb-0 text-sm text-center">{{$p->pekerjaan}}</h6>
                                            </td>
                                            <td class="align-middle">
                                                <h6 class="mb-0 text-sm text-center">{{ ($p->jenis_kelamin==0) ? 'Perempuan' : 'Laki-laki' }}</h6>
                                            </td>
                                            <td class="align-middle">
                                                <h6 class="mb-0 text-sm text-center">{{$p->nama_ayah}}</h6>
                                            </td>
                                            <td class="align-middle">
                                                <h6 class="mb-0 text-sm text-center">{{$p->nama_ibu}}</h6>
                                            </td>
                                            <td class="align-middle">
                                                <h6 class="mb-0 text-sm text-center">{{$p->alamat}}</h6>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <form method='POST'action="{{route('admin.people.deletePenggunaUtama',$p->uuid)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{route('admin.people.editPenggunaUtama',$p->uuid)}}"><i class="fa fa-pencil me-3"></i></a>
                                                    <button type="submit" class="border-0 bg-transparent"><i class="fa fa-trash ms-3"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="99" class="align-middle text-center">
                                                <div class="d-flex flex-column justify-content-center">
                                                    Tidak Ada Data
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
