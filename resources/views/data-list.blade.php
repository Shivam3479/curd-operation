@extends('app')
@section('content')
    <section class="py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h4>Data List</h4>
                <div>
                    <a href="{{url('create-list')}}" class="btn btn-sm btn-outline-secondary">Create Data</a>
                </div>
            </div>
            @if (session('error'))
                <div class="alert alert-danger">
                    {!! session('error') !!}
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_lists as $data_lists)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$data_lists->name}}</td>
                        <td>{{$data_lists->email}}</td>
                        <td>{{$data_lists->phone}}</td>
                        <td>{{$data_lists->message}}</td>
                        <td>
                            <a class="btn btn-sm btn-outline-info" href="{{url('data-list-store')}}/{{$data_lists->id}}/edit">Edit</a>
                            <form class="d-inline-block" action="{{url('data-list-store')}}/{{$data_lists->id}}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Del</button>
                            </form>                            
                        </td>
                    </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>
    </section>
@endsection