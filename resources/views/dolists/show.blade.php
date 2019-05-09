@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center my-5">{{$dolists->name}}</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Details</div>
                    <div class="card-body">
                        {{$dolists->description}}
                    </div>
                </div>
                @auth
                    <a href="/dolists/{{$dolists->id}}/edit" class="btn btn-info btn-sm my-3">Edit</a>
                    <a href="" class="btn btn-danger btn-sm my-3">Delete</a>
                @endauth
            </div>
        </div>
    </div>
@endsection