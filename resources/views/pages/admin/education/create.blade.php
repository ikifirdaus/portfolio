@extends('layouts.admin.index')

@section('content')
<section class="content">
    {!! Form::open(array('route' => 'education.store', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal')) !!}
    @csrf
    <div class="container section-header-banner pb-5">
        <!-- DataTales Example -->
        <div class="card shadow border-0 ">
            <div class="card-header py-3">
                <h6 class="font-weight-bold text-secondary">ADD EDUCATION</h6>
            </div>
    
            <div class="card-body card-form">
                <form>

                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Tanggal</label>
                        <input name="tanggal" type="text" class="form-control" id="formGroupExampleInput" placeholder="contoh: 2020 - Present">
                    </div>
    
                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Title</label>
                        <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="title">
                    </div>

                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Deskripsi</label>
                        <textarea name="deskripsi" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Description" rows="5"></textarea>
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
