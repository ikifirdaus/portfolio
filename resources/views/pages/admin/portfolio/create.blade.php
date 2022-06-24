@extends('layouts.admin.index')

@section('content')
<section class="content">
    {!! Form::open(array('route' => 'portfolioAdmin.store', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal')) !!}
    @csrf
    <div class="container section-header-banner pb-5">
        <!-- DataTales Example -->
        <div class="card shadow border-0 ">
            <div class="card-header py-3">
                <h6 class="font-weight-bold text-secondary">ADD PORTFOLIO</h6>
            </div>
    
            <div class="card-body card-form">
                <form>
                    <div class="pt-3 pb-3">
                        <label for="formGroupExampleInput">Upload Gambar</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">448x226</span>
                            </div>
                        <div class="custom-file">
                          <input name="gambar" type="file" class="custom-file-input" id="imgInp">
                          <label class="custom-file-label" for="inputGroupFile01">Add File</label>
                        </div>
                        </div>
    
                        <div>
                            <img id="blah" src="#" alt="Preview" class="img-fluid" />
                        </div>
                    </div>
    
                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Tanggal</label>
                        <input name="tanggal" type="date" class="form-control" id="formGroupExampleInput" placeholder="title">
                    </div>

                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Title</label>
                        <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="title">
                    </div>

                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Deskripsi Singkat</label>
                        <textarea name="deskripsi_singkat" type="text" class="form-control" id="formGroupExampleInput2" placeholder="description" rows="5"></textarea>
                    </div>

                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Deskripsi Singkat</label>
                        <textarea name="deskripsi_lengkap" type="text" class="form-control" id="formGroupExampleInput2" placeholder="description" rows="5"></textarea>
                    </div>

                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Url</label>
                        <input name="url" type="text" class="form-control" id="formGroupExampleInput" placeholder="link url">
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