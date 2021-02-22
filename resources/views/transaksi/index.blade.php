<html>
	<head>
		<title></title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container mt-5 ">
			<div class="row ">
			<div class="col-md-8 m-auto">
			<h4> Tambah Transaksi </h4>
				<form action="/transaksi" method="post" class="form-group">
					@csrf
					<div class="mb-2">
						<label class="bg-danger">bulan</label>
						<select name="bulan">
						<option value="01">january</option>
						<option value="02">february</option>
						<option value="03">maret</option>
						<option value="04">april</option>
						<option value="05">mei</option>
						<option value="06">juni</option>
						<option value="07">july</option>
						<option value="08">agustus</option>
						<option value="09">september</option>
						<option value="10">oktober</option>
						<option value="11">november</option>
						<option value="12">desember</option>
						</select>
						
					</div>
					<div class="mb-2">
						<label>Tahun</label>
						<select name="tahun">
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
						</select>
					</div>
					<div class="mb-2">
					<label>Nama Karyawan</label>
						<select name="karyawan">
						@foreach($karyawans as $k)
							<option value="{{$k->idkaryawan}}">{{$k->namakaryawan}}</option>
							
						@endforeach
						</select>
					</div>
					<div class="mb-2">
						<label>Lembur</label>
						<input type="text" name="lembur">
					</div>
					<div class="mb-2">
						<label>Transport</label>
						<input type="text" name="transport">
					</div>
					<button type="submit">submit</submit>
				</form>
			</div>
			</div>
		</div>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>