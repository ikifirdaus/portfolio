@extends('layouts.admin.index')

@section('content')
<section class="content">
    {!! Form::open(array('route' => 'knowledge.store', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'class'=>'form-horizontal')) !!}
    @csrf
    <div class="container section-header-banner pb-5">
        <!-- DataTales Example -->
        <div class="card shadow border-0 ">
            <div class="card-header py-3">
                <h6 class="font-weight-bold text-secondary">ADD KNOWLEDGE</h6>
            </div>
    
            <div class="card-body card-form">
                <form>
                    
                    <div class="form-group pt-2">
                        <label for="formGroupExampleInput">Deskripsi</label>
                        <textarea name="deskripsi" type="text" class="form-control" id="formGroupExampleInput2" placeholder="short Description" rows="3"></textarea>
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