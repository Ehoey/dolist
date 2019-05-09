@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center my-2">Wish list</h1>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-header">Wish list</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($dolists as $dolist)
                                <li class="list-group-item">
                                    {{$dolist->name}}
                                    <a href="/" class="btn btn-primary btn-sm float-right">View</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection