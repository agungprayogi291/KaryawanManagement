<html>
	<head>
		<title></title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 mt-3">
					<form action="{{route('student.save')}}" method="post">
					@csrf 
					<h4>Add new Student</h4><hr>
						<div class="form-group">
							<label >Student name</label>
							<input type="text" name="name" id="name" class="form-control mb-2" placeholder="Enter student name">
						</div>
						<button type="submit" class="btn btn-primary form-control">Submit</button>
					</form>
				</div>
			</div>
		</div>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>