@extends('layouts.admin.index')

@section('content')
    <div class="container section-header-banner">
        <!-- DataTales Example -->
        <div class="card shadow border-0 ">
            <div class="card-header py-3 d-flex">
                <h6 class="font-weight-bold text-secondary">MAIL</h6>
            </div>
            

            {{-- <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Notification</div>
            
                            <div class="card-body">
                                
                                @foreach (auth()->user()->$notification as $notification)
                                <div class="p-3 m-2">
                                    Inbox from <b>{{ $notification->data['email'] }}</b> 
                                    <a href="{{ route('markasred') }}">
                                        Mark as read
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}


            <div class="card-body">
                {{-- <div class="pb-3 d-flex">
                    <a href="{{ route('education.create') }}" class="btn btn-homedashboard ml-auto rounded-2">
                        <i class="fa-solid fa-plus"></i><span> Add Education</span>
                    </a>
                </div> --}}
                
                <div class="table-responsive bg-white">
                    <table class="table table-striped" id="myTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th style="width: .01%">No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th class="">Message</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($contactForm as $key => $item)
                            <tr id="row{{ $item->id }}">
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone}}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->subject }}</td>
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
                                                {{ $item->message }}
                                            </div>
                                        </div>
                                        </div>
                                    </div>    
                                </td>

                                <td style="white-space: nowrap">
                                    <div class="d-flex justify-content-center">
                                        
                                        {{-- button delete --}}
                                        {!! Form::open(['route' => ['contactForm.delete',$item->id], 'method' => 'delete']) !!}
                                        <button class="delete border-0" style="background: transparent;">
                                            <i class="far fa-trash-alt"></i> mark as read
                                        </button>
                                        {!!Form::close() !!}
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