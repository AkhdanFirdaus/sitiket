@extends('layouts.app')

@section('content')
<hr>
<div class="container">
	<div class="col-lg-10 offset-lg-1 card shadow p-0">
		<div class="card-header bg-info text-light"><h3>Profilmu</h3></div>
		<div class="card-body">			
			<form action="{{route('saveProfile', $user->id)}}" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
				{{method_field('PUT')}}
				<div class="row">
					<div class="col-lg-6">
						<div class="form-row">
							<div class="col-lg-3 text-center">
								<img src="/img/avatar/{{$user->avatar}}" alt="" class="img-fluid">
							</div>
							<div class="form-group col-lg-9">
								<label for="avatar">Gambar</label>
								<div class="custom-file">
									<input type="file" name="avatar" class="custom-file-input">
									<label for="avatar" class="custom-file-label">Pilih Gambar</label>
								</div>
							</div>	
						</div>						
						<hr class="border">
						<div class="form-group form-row">
							<label for="name" class="col-lg-2 col-form-label">Nama</label>
							<input type="text" name="name" class="form-control col-lg-10" value="{{$user->name}}">	
						</div>
						<div class="form-group form-row">
							<label for="email" class="col-lg-2 col-form-label">Email</label>
							<input type="email" name="email" class="form-control col-lg-10" value="{{$user->email}}">
						</div>
						<div class="form-group form-row">
							<label for="region" class="col-lg-2 col-form-label">Privinsi</label>
							<select name="region" id="region" class="form-control col-lg-10">
								@foreach($regions as $count => $region)
								<option value="{{$region->id}}">{{$region->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="address">Alamat</label>
							<textarea name="address" id="address" cols="30" rows="6" class="form-control">{{$user->address}}</textarea>
						</div>
						<div class="form-row">
							<div class="col-lg-6"><button type="submit" class="btn btn-primary btn-block">Simpan</button></div>
							<div class="col-lg-6"><button onclick="history.go(-1)" class="btn btn-danger btn-block">Cancel</button></div>
						</div>						
					</div>
				</div>
			</form>
		</div>
	</div>
	@include('partials.message')
</div>
@endsection