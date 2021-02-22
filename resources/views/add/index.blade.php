<html>
	<head>
		<title></title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container mt-5 ">
			<div class="row ">
			<div class="col-md-8 m-auto">
				<form action="{{route('karyawan-save')}}" method="post" class="form-group">
					@csrf
					<h4>
						TAMBAH KARYAWAN
					</h4>
					<label>Nama Karyawan</label>
					<input type="text" name="name" class="form-control">
					<label>Jenis kelamin</label>
					<select name="gender">				
						<option >pilih Gender --</option>
						<option value="L">L</option>
						<option value="P">P</option>
					</select>
					<label>Alamat</label>
					<textarea name="alamat" col="30" row="2" class="form-control"></textarea>
					<label>tempat Lahir</label>
					<input type="text" name="lahir" class="form-control">
					<label>tanggal lahir</label>
					<input type="date" name="tanggal" class="form-control">
					<label>Golongan</label>
					<select name="golongan" class="mb-2">
						<option>--pilih golongan --</option>
						<option value="M">Manager</option>
						<option value="K">Karyawan</option>
						<option value="S">SPV</option>
						<option value="H">HRD</option>
					</select>
					<button class="btn btn-primary form-control " type="submit">Submit</button>
				</form>
			</div>
			</div>
		</div>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>