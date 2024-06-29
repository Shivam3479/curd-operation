@extends('app')
@section('content')
<section class="py-3">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-2">
            <h4>Data List</h4>
            <div>
                <a href="{{url('data-list-store')}}" class="btn btn-sm btn-outline-secondary">View Data</a>
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
        <form action="{{url('data-list-store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Email">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
            </div>
            <div class="mb-3">
                <label for="file" class="form-label">Upload Document</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="3" placeholder="Enter Message"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-outline-primary" type="submit">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection