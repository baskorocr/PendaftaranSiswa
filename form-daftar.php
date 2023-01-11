<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body class="z">
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="/datamhs">SMAN 1 KONOHA</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			</ul>
			</div>
		</div>
		</nav>
    </header>

    <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4 p-5 shadow-sm border rounded-3">
                <h2 class="text-center mb-4 text">Form Pendaftaran Siswa </h2>
                <form action="proses-pendaftaran.php" method="post" onSubmit="return validasi()">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text">Nama</label>
                        <input type="text" class="form-control border border-primary" name="nama" id="nama" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text">Alamat</label>
                        <input type="text" class="form-control border border-primary" name="alamat" id="alat">
                    </div>
                    <div class="mb-3 text">
                        <label for="exampleInputPassword1" class="form-label text">Jenis Kelamin</label>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                    </div>
                    <div class="mb-3 text">
                        <label for="exampleInputPassword1" class="form-label text">Agama</label>
                        <select name="agama">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                            <option>Atheis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text">Sekolah Asal</label>
                        <input type="text" class="form-control border border-primary" name="sekolah_asal" placeholder="nama sekolah" id="sekolah_asal">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit" value="Daftar" name="daftar">Register</button>
                    </div>
                </form>
               
            </div>
        </div>

 </body>
</html>