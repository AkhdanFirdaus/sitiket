@extends('layouts.app')

@section('content')
<form action="{{route('event.store')}}" method="POST">
	{{csrf_field()}}
	<div class="col-lg-6 offset-lg-3">
		<div class="form-group">
			<label for="name">Nama</label>
			<input type="text" class="form-control" name="name">
		</div>
		<div class="form-group">
			<label for="location">Lokasi</label>
			<textarea name="location" id="location" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="description">Deskripsi</label>
			<textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="event">Event</label>
			<input type="date" class="form-control" name="event" value="{{\Carbon\Carbon::now()}}">
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
@endsection