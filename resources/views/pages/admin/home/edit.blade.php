@extends('layouts.admin.index')

@section('content')
<section class="content">
    {!! Form::model($data, ['method' => 'POST','route' => ['home-dashboard.update',$data->id], 'enctype'=>'multipart/form-data']) !!}
    @csrf
    <div class="container section-header-banner pb-5">
        <!-- DataTales Example -->
        <div class="card shadow border-0 ">
            <div class="card-header py-3">
                <h6 class="font-weight-bold text-secondary">ADD HOME</h6>
            </div>
    
            <div class="card-body card-form">
                <form>
                    <div class="pt-3 pb-3">
                        <label for="formGroupExampleInput">Upload Gambar</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">500x300</span>
                            </div>
                        <div class="custom-file">
                          <input name="gambar_home" type="file" class="custom-file-input" id="imgInp">
                          <label class="custom-file-label" for="inputGroupFile01">Add File</label>
                        </div>
                        </div>
    
                        <div>
                            <img id="blah" src="{{ asset('/uploads/home/'.$data->gambar_home) }}" alt="Preview" class="img-fluid" />
                        </div>
                    </div>
    
                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Title</label>
                        <input name="title_home" type="text" class="form-control" id="formGroupExampleInput" placeholder="title" value="{{ $data->title_home }}">
                    </div>

                    <div class="form-group pt-2 pb-3">
                        <label for="formGroupExampleInput">Deskripsi</label>
                        <textarea name="deskripsi_home" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Short Description" rows="5">{{ $data->deskripsi_home }}</textarea>
                    </div>
    
                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Email</label>
                        <input name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="contoh: admin@gmail.com" value="{{ $data->email }}">
                    </div>
    
                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Telephone</label>
                        <input name="telephone" type="text" class="form-control" id="formGroupExampleInput" placeholder="contoh: +62 896 8896 1400" value="{{ $data->telephone }}">
                    </div>
    
                </form>
    
                {{-- forminput --}}
                <div class="pt-3 pb-3">
                    <a href="{{ url()->previous() }}" class="btn btn-default btn-sm" data-toggle="tooltip" title="Kembali">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success btn-sm" data-toggle="tooltip" title="client">
                        <i class="fas fa-save"></i> Simpan <span class="title-crud"></span>
                    </button>
                </div>
                
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</section>
@endsection

@section('script')
<script>
  $('#blah').hide();
  imgInp.onchange = evt => {
    // console.log(evt);
    const [file] = imgInp.files
    if (file) {
      blah.src = URL.createObjectURL(file)
      $('#blah').show();
    }
  }
</script>
@endsection