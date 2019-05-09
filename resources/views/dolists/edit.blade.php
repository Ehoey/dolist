@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center my-5">Update list</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Edit list</div>
                    <div class="card-body">
                        <form action="/dolists/{{$dolists->id}}/update-dolist" method="POST">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" placeholder="name" type="text" name="name" value="{{$dolists->name}}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description" placeholder="Description" id="" cols="8" rows="10">{{$dolists->description}}</textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection