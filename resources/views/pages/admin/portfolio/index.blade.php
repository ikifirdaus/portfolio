@extends('layouts.admin.index')

@section('content')
    <div class="container section-header-banner">
        <!-- DataTales Example -->
        <div class="card shadow border-0 ">
            <div class="card-header py-3 d-flex">
                <h6 class="font-weight-bold text-secondary">PORTFOLIO</h6>
            </div>
            
            <div class="card-body">
                <div class="pb-3 d-flex">
                    <a href="{{ route('portfolioAdmin.create') }}" class="btn btn-homedashboard ml-auto rounded-2">
                        <i class="fa-solid fa-plus"></i><span> Add Portfolio</span>
                    </a>
                </div>
                
                <div class="table-responsive bg-white">
                    <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: .01%">No</th>
                                <th>Gambar</th>
                                <th>Tanggal</th>
                                <th>Title</th>
                                <th>Deskripsi Singkat</th>
                                <th>Deskripsi Lengkap</th>
                                <th>Url</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($portfolio as $key => $item)
                            <tr id="row{{ $item->id }}">
                                <th scope="row">{{ $key + 1 }}</th>
                                <td><img src="{{ asset('/uploads/portfolio/'.$item->gambar) }}" alt="" width="200px" height="100px"></td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <a class="btn-deskripsi" type="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}">
                                        <i class="fa-solid fa-right-to-bracket"></i>
                                    </a>
                                
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $item->deskripsi_singkat }}
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <a class="btn-deskripsi" type="button" data-toggle="modal" data-target="#exampleModal2{{ $item->id }}">
                                        <i class="fa-solid fa-right-to-bracket"></i>
                                    </a>
                                
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal2{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                {{ $item->deskripsi_lengkap }}
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                <td>{{ $item->url }}</td>
                                <td style="white-space: nowrap">
                                    <div class="d-flex justify-content-center">
                                        {{-- button edit --}}
                                        <button class="border-0" style="background: transparent;">
                                            <a href="{{ route('portfolioAdmin.edit', $item->id) }}"><i class="fa-solid fa-pen-to-square"></i></a>
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

                                                    {!! Form::open(['route' => ['portfolioAdmin.delete',$item->id], 'method' => 'delete']) !!}
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