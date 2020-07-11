@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Tweets</div>

                    <div class="card-body">
                        twitter api (soon)
                    </div>
                </div>
            </div>        
            <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Publicaciones realizadas</p>
                    <ul>
                        @foreach($entries as $entry)
                        <a href="{{url('entries/'.$entry->id)}}">
                        <li>{{$entry->title}}</li>

                        </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
