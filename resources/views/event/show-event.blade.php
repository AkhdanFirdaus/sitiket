@extends('layouts.app')

@section('title', $event->name)

@section('content')
<div class="container">
	<div class="jumbotron">
		<h2 class="text-center">
			{{$event->name}}
			<small>by: {{$event->user->name}}</small>
		</h2>
		<div class="row my-4">
			<div class="offset-lg-2 col-lg-8 card">
				<div class="card-body">
					<p>{{$event->location}}</p>
					<hr>
					<p>{{$event->description}}</p>
				</div>
			</div>
		</div>
		<hr>
		<h4 class="text-center my-4">Ticket</h4>
		<div class="row">
			<table class="table text-center bg-light">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Type</th>
						<th scope="col">Price</th>
						<th scope="col">Qty</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($event->ticket as $index => $ticket)
					<tr>
						<th scope="row">{{$index+1}}</th>
						<td>{{$ticket->type}}</td>
						<td id="price">{{$ticket->price}}</td>
						<td>{{$ticket->stock}}</td>
						<td>
							<select type="number" name="qty" id="qty" class="form-control">
								@for($i = 0; $i<= $ticket->stock; $i++)
								<option value="{{$i}}">{{$i}}</option>
								@endfor
							</select>
						</td>
					</tr>
					@endforeach
					<tr>
						<th scope="row" colspan="3" class="text-right">
							Total Harga
						</th>
						<td scope="col">
							Harga
						</td>
						<td class="text-right" colspan="2">
							<a href="{{route('order.store')}}" class="btn btn-primary">Pesan</a>
						</td>
					</tr>
				</tbody>
			</table>			
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	var total = document.getElementById('price').val() * document.getElementById('qty').val();
</script>
@endsection