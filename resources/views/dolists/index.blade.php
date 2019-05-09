@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center my-2">do list</h1>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card card-default">
                    <div class="card-header">do list</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($dolists as $dolist)
                                <li class="list-group-item">
                                    {{$dolist->name}}
                                    @if(!$dolist->completed)
                                        <a href="/dolists/{{$dolist->id}}/complete" style="color: #fff; background-color: #f1de39f2;" class="btn btn-warning btn-sm float-right">Completed</a>
                                    @endif
                                    <a href="/dolists/{{$dolist->id}}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection