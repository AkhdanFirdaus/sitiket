<form action="" method="POST">
	<div class="form-group">
		<label for="nama">Nama</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Lokasi</label>
		<input type="textarea" name="location" class="form-control">
	</div>
	<div class="form-group">
		<label for="description">Deskripsi</label>
		<input type="textarea" name="description" class="form-control">
	</div>
	<div class="form-row">
		<div class="col-lg-6 form-group">
			<label for="eventstart">Tanggal Event</label>
			<input type="date" name="eventstart" class="form-control" value="{{ \Carbon\Carbon::now() }}">
		</div>
		<div class="col-lg-6 form-group">
			<label for="eventend">Tanggal Event Selesai</label>
			<input type="date" name="eventend" class="form-control">
		</div>
	</div>
	<div class="form-row">
		<div class="col-lg-6">
			<button type="submit" class="btn btn-primary btn-block">Save Event</button>
		</div>
		<div class="col-lg-6">
			<button type="reset" class="btn btn-danger btn-block">Reset</button>
		</div>
	</div>
</form>