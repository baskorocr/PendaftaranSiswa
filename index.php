<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="z">
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="/">SMAN 1 KONOHA</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			</ul>
			<a class="btn btn-primary" href="/datamhs/login.php" role="button">login</a>
			</div>
		</div>
		</nav>
    </header>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "<div class='p-3 mb-2 bg-success text-white d-flex justify-content-center'>Pendaftaran Berhasil</div>";
            } else {
                echo "<div class='p-3 mb-2 bg-danger text-white d-flex justify-content-center'>Pendaftaran gagal</div>";
            }
        ?>
    </p>
        <?php endif; ?>

    <div class="d-flex justify-content-center margin">
        <div>
            <h1 class="d-flex justify-content-center text">SELAMAT DATANG</h1>
            <h3 class="text"> DI WEBSITE PENDAFTARAN SMAN 1 KONOHA</h3>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary p" href="form-daftar.php" role="button">Daftar Baru</a>
                <a class="btn btn-primary p" href="list-siswa.php" role="button">List Pendaftar</a>
            </div>

        </div>
    

    </div>

     </body>
</html>