<?php
session_start();
if(!isset($_SESSION["username"]))
{
 header("location:register.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register admin</title>
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
                <h2 class="text-center mb-4 text">Register Form Admin</h2>
                <form action="register-proses.php" method="post" onSubmit="return validasi()">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text">Username</label>
                        <input type="text" class="form-control border border-primary" name="username" id="username" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text">Password</label>
                        <input type="password" class="form-control border border-primary" name="password" id="password">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit" value="Daftar" name="daftar">Register</button>
                    </div>
                </form>
               
            </div>
        </div>

 </body>

</html>