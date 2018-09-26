@extends('layouts.app')

@section('content')
<div class="container">
	<div class="p-5">
		<a href="{{route('event.create')}}" class="btn btn-link">Add data</a>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Nama Event</th>
					<th scope="col">Penyelenggara</th>
					<th scope="col">Lokasi</th>
					<th scope="col">Deskripsi</th>
					<th scope="col">Event time</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@if(count($events) > 0)
				@foreach($events as $index => $event)
				<tr>
					<th scope="row">{{$index+1}}</th>
					<td><a href="{{route('event.show', $event->slug)}}">{{$event->name}}</a></td>
					<td>{{$event->user->name}}</td>
					<td>{{$event->location}}</td>
					<td>{{$event->description}}</td>
					<td>{{$event->event_start}}</td>
					<td>
						<div class="form-row">
							<div class="col-lg-6">
								<a href="{{route('event.edit', $event->slug)}}" class="btn btn-warning btn-block">Edit</a>
							</div>
							<div class="col-lg-6">
								<form action="{{route('event.destroy', $event->slug)}}" method="POST">
									<button type="submit" class="btn btn-danger btn-block">Delete Event</button>	
									{{method_field('DELETE')}}
									{!! csrf_field() !!}									
								</form>								
							</div>					
						</div>						
					</td>
				</tr>
				@endforeach
				@else
				<tr>
					<th scope="row" colspan="7">Data Kosong</th>
				</tr>
				@endif
			</tbody>
		</table>
	</div>
	@include('partials.message')
</div>
@endsection