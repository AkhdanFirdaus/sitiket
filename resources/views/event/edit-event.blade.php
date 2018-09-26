@extends('layouts.app')

@section('content')
<form action="{{route('event.update', $event->slug)}}" method="POST" enctype="multipart/form-data">
	{{csrf_field()}}
	{{method_field('PUT')}}
	<div class="col-lg-6 offset-lg-3">
		<div class="form-group">
			<label for="photo">Nama</label>
			<input type="file" class="form-control" name="photo">
		</div>
		<div class="form-group">
			<label for="name">Nama</label>
			<input type="text" class="form-control" name="name" value="{{$event->name}}">
		</div>
		<div class="form-group">
			<label for="location">Lokasi</label>
			<textarea name="location" id="location" cols="30" rows="10" class="form-control">{{$event->location}}</textarea>
		</div>
		<div class="form-group">
			<label for="description">Deskripsi</label>
			<textarea name="description" id="description" cols="30" rows="10" class="form-control">{{$event->description}}</textarea>
		</div>
		<div class="form-group">
			<label for="event">Event</label>
			<input type="date" class="form-control" name="event" value="{{$event->event_start}}">
		</div>
		<div class="form-row">
			<div class="col-lg-6">
				<button class="btn btn-primary btn-block" type="submit">Simpan Event</button>
			</div>
			<div class="col-lg-6">
				<button class="btn btn-danger btn-block" type="submit">Cancel</button>
			</div>
		</div>
	</div>		
</form>
@include('partials.message')
@endsection