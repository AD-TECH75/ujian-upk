<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- title -->
	<title>Document</title>

	<!-- style.css -->
	<link rel="stylesheet" href="assets/css/style.css" />

	<!-- bootsrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

	<!-- bootstrap icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
</head>

<body class="bg-primary">
	<main>
		<div class="d-flex justify-content-center align-items-center min-vh-100">
			<div class="card card-body bg-light shadow p-4 col-10 col-sm-8 col-md-8 col-lg-4">
				<h1 class="fw-bold text-center text-capitalize">manajemen buku</h1>
				<p class="text-center">Perpustakaan Digital</p>

				<form onsubmit="return login()">
					<div class="mb-3">
						<label for="email" class="form-label text-capitalize">email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="email@example.com"
							required />
					</div>

					<div class="mb3">
						<label for="password" class="form-label text-capitalize">password</label>
						<input type="password" name="password" id="password" class="form-control" placeholder="password"
							required />
					</div>

					<!-- tampilan error -->
					<div class="mb-3 mt-2">
						<p id="error" class="text-danger border-danger text-center"></p>
					</div>

					<div class="d-grid gap-2 mt-2">
						<button type="submit" class="btn btn-primary">submit</button>
					</div>
				</form>

				<div class="info-login card card-body mt-3 shadow-sm border-0 position-relative">
					<span class="left-line"></span>
					<h2 class="text text-capitalize fw-bold">demo login</h2>
					<p class="mb-0">Email: admin@gmail.com</p>
					<p class="mb-0">Password: admin</p>
				</div>
			</div>
		</div>
	</main>
</body>

<!-- script.js -->
<script src="assets/js/script.js"></script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
	crossorigin="anonymous"></script>

</html>