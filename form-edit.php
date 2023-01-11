<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
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
                <h2 class="text-center mb-4 text">Form edit Pendaftaran Siswa </h2>
                <form action="proses-edit.php" method="post" onSubmit="return validasi()">
                    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text">Nama</label>
                        <input type="text" class="form-control border border-primary" name="nama" id="nama" aria-describedby="emailHelp" value="<?php echo $siswa['nama'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text">Alamat</label>
                        <input type="text" class="form-control border border-primary" name="alamat" id="alat" value="<?php echo $siswa['alamat'] ?>"> 
                    </div>
                    <div class="mb-3 text">
                        <label for="exampleInputPassword1" class="form-label text">Jenis Kelamin</label>
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?> > Perempuan</label>
                    </div>
                    <div class="mb-3 text">
                        <label for="exampleInputPassword1" class="form-label text">Agama</label>
                        <?php $agama = $siswa['agama']; ?>
                        <select name="agama">
                            <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                            <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text">Sekolah Asal</label>
                        <input type="text" class="form-control border border-primary" name="sekolah_asal" placeholder="nama sekolah" id="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit" value="Simpan" name="simpan">Register</button>
                    </div>
                </form>
               
            </div>
        </div>

 </body>

   

</html>