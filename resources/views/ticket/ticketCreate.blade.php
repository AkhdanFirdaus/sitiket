@extends('layouts.app')

@section('content')
<form action="{{route('ticket.store')}}" method="POST">
	{{csrf_field()}}
	<div class="form-group">
		<label for="eventnya">Nama Event</label>
		<input type="text" class="form-control" name="eventnya" value="">
	</div>
</form>
@endsection