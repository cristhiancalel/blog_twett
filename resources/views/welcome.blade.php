@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">Last Entries</h1>
            @foreach ($entries as $entry)
            <div class="card mb-4">
                <div class="card-header">{{$entry->id}}.{{$entry->title}}</div>

                <div class="card-body">
                    <p>{{$entry->content}}</p>
                </div>
                <!-- para realizar un llamado a un dato perteneciente a otra tabla  se debe realizar una relacion en la clase de su modelo en este caso en Entry  -->
                <div class="card-footer">
                    <a href="{{ url('users/'.$entry->user_id) }}">
                        {{$entry->user->name}}
                    </a>
                </div>
            </div>
            @endforeach
            {{$entries->links()}}
        </div>
    </div>
</div>
@endsection
