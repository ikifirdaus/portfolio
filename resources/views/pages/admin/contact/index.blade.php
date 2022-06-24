@extends('layouts.admin.index')

@section('content')
    <div class="container section-header-banner">
        <!-- DataTales Example -->
        <div class="card shadow border-0 ">
            <div class="card-header py-3 d-flex">
                <h6 class="font-weight-bold text-secondary">CONTACT</h6>
            </div>

            <div class="card-body">
                <div class="pb-3 d-flex">
                    <a href="{{ route('contactAdmin.create') }}" class="btn btn-homedashboard ml-auto rounded-2">
                        <i class="fa-solid fa-plus"></i><span> Add Contact</span>
                    </a>
                </div>
                
                <div class="table-responsive bg-white">
                    <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: .01%">No</th>
                                <th>Gambar</th>
                                <th>Title</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($contactAdmin as $key => $item)
                            <tr id="row{{ $item->id }}">
                                <th scope="row">{{ $key + 1 }}</th>
                                <td><img src="{{ asset('/uploads/contact/'.$item->gambar) }}" width="30px" height="30px"></td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td style="white-space: nowrap">
                                    <div class="d-flex justify-content-center">
                                        {{-- button edit --}}
                                        <button class="border-0" style="background: transparent;">
                                            <a href="{{ route('contactAdmin.edit', $item->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                        </button>
                                        
                                        {{-- button delete --}}
                                        <button class="delete border-0" data-toggle="modal" data-target="#exampleModal" style="background: transparent;">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                        
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Are you sure ?</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  ...
                                                </div>
                                                <div class="modal-footer">

                                                    {!! Form::open(['route' => ['contactAdmin.delete',$item->id], 'method' => 'delete']) !!}
                                                    <button class="btn btn-outline-danger">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    {!!Form::close() !!}
                                                    
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                    </div>       
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection