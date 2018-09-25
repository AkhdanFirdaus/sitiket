@extends('layouts.app')

@section('content')
<div class="container">
    <div class="my-4">
        <div class="jumbotron">
            <h1>Judul</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, labore, doloremque. At, saepe, rem! Pariatur dignissimos quos, deleniti tempore nisi.</p>
        </div>
    </div>
    @if(count($events) > 0)    
    <div class="row">
        @foreach($events as $index => $event)
        <div class="col-lg-4">
            <div class="card border-0">
                <div class="card-header bg-info text-light">{{$event->name}}</div>
                <div class="card-body">
                    <p>{{$event->description}}</p>
                    <a href="{{route('event.show',$event->slug)}}">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="jumbotron my-4">
        <h1>Tidak ada event</h1>
    </div>
    @endif
</div>
@endsection