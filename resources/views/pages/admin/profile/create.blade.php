@extends('layouts.admin.index')

@section('content')
<section class="content">
    {!! Form::open(array('route' => 'profile.store', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal')) !!}
    @csrf
    <div class="container section-header-banner pb-5">
        <!-- DataTales Example -->
        <div class="card shadow border-0 ">
            <div class="card-header py-3">
                <h6 class="font-weight-bold text-secondary">ADD PROFILE</h6>
            </div>
    
            <div class="card-body card-form">
                <form>
                    <div class="pt-3 pb-3">
                        <label for="formGroupExampleInput">Upload Gambar</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">500x500</span>
                            </div>
                        <div class="custom-file">
                          <input name="gambar_profile" type="file" class="custom-file-input" id="imgInp">
                          <label class="custom-file-label" for="inputGroupFile01">Add File</label>
                        </div>
                        </div>
    
                        <div>
                            <img id="blah" src="#" alt="Preview" class="img-fluid" />
                        </div>
                    </div>
    
                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Deskripsi</label>
                        <textarea name="deskripsi_profile" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Description" rows="5"></textarea>
                    </div>

                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Age</label>
                        <input name="age" type="text" class="form-control" id="formGroupExampleInput" placeholder="contoh: 34">
                    </div>
    
                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Freelance</label>
                        <input name="freelance" type="text" class="form-control" id="formGroupExampleInput" placeholder="contoh: Available">
                    </div>
    
                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Telephone</label>
                        <input name="telephone" type="text" class="form-control" id="formGroupExampleInput" placeholder="contoh: +62 896 8896 1400">
                    </div>

                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Residence</label>
                        <input name="residence" type="text" class="form-control" id="formGroupExampleInput" placeholder="contoh: INDONESIA">
                    </div>

                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Address</label>
                        <input name="address" type="text" class="form-control" id="formGroupExampleInput" placeholder="contoh: Jakarta">
                    </div>

                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Email</label>
                        <input name="email" type="text" class="form-control" id="formGroupExampleInput" placeholder="contoh: admin@gmail.com">
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