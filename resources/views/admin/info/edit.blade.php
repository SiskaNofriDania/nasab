

@extends('base')
@section('title', 'Edit Info')
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
                            <form action="{{ route('info.update',$info) }}" method="POST">
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
                                    </div>
                                </div>
                                <div class="row form-group my-4">

                                    <div class="col-1 offset-2">
                                        <label for="judul">Nasab</label>
                                    </div>
                                    <div class="col-7">
                                        <input type="text" class="form-control border" id="judul" name="judul" value="{{old('judul') ? old('judul') : $info->judul}}">
                                        @error('judul')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row form-group mb-4">
                                    <div class="col-1 offset-2">
                                        <label for="isi">Deskripsi</label>
                                    </div>
                                    <div class="col-7">

                                          <script src="https://cdn.tiny.cloud/1/fvaqjod4kow4i4pifh56xjh7b7rjz53c750m9jw018dekpvc/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
                                          <script>
                                            tinymce.init({
                                              selector: 'textarea',
                                              plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
                                              toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                              tinycomments_mode: 'embedded',
                                              tinycomments_author: 'Author name',
                                              mergetags_list: [
                                                { value: 'First.Name', title: 'First Name' },
                                                { value: 'Email', title: 'Email' },
                                              ],
                                            });
                                          </script>

                                        <textarea  class="form-control border" id="isi" name="isi">{{old('isi') ? old('isi') : $info->isi}}</textarea>
                                        @error('info')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="float-end">
                                <button type="submit" class="btn btn-success btn-sm">Edit</button>
                                <a href="/info" class="btn btn-secondary btn-sm">Kembali</a>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @endsection






