

@extends('base')
@section('title','Tambah Info')
@section('content')
<div wire:id="FYQZqBk4Fb8OV0gHZfS4" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;FYQZqBk4Fb8OV0gHZfS4&quot;,&quot;name&quot;:&quot;tables&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;tables&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;a7b03934&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;90698ce4f3bac754d4ff85483f5177de068f6cc8de223181875a801ddfea5824&quot;}}" class="">
    <!-- Navbar -->
    <!-- End Navbar -->

    <div class="container-fluid py-4">

                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-2 z-index-1">
                        <div class="d-flex justify-content-center align-items-center bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                            <h3 class="text-white text-capitalize ps-3">Info</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('info.store') }}" method="POST">
                            @csrf
                            <div class="row form-group my-4">
                                <div class="col-1 offset-2">
                                    <label for="judul">Nasab</label>
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
                                    <label for="isi">Deskripsi</label>
                                </div>
                                <div class="col-7">
                                    <textarea  class="form-control border" id="isi" name="isi"></textarea>

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

                                    @error('info')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="float-end">
                            <button type="submit" class="btn btn-success btn-sm">Tambah</button>
                            <a href="/info" class="btn btn-secondary btn-sm">Kembali</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

</div>
 @endsection








