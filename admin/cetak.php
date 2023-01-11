<?php include("../config.php");
session_start();
if(!isset($_SESSION["username"]))
{
 header("location:../login.php");
}


?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body>
    <center>
        <h2> Print Data pendaftaran Siswa</h2>
        <hr />
    </center>
    <table class="table text mt-5">
            <thead>
                <tr>
                <th scope="col">ID Pendaftar</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Agama</th>
                <th scope="col">Sekolah asal</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $sql = "SELECT * FROM calon_siswa";
                    $query = mysqli_query($db, $sql);
                    while($siswa = mysqli_fetch_array($query)){
                        echo "<tr>";

                        echo "<td>".$siswa['id']."</td>";
                        echo "<td>".$siswa['nama']."</td>";
                        echo "<td>".$siswa['alamat']."</td>";
                        echo "<td>".$siswa['jenis_kelamin']."</td>";
                        echo "<td>".$siswa['agama']."</td>";
                        echo "<td>".$siswa['sekolah_asal']."</td>";
                        echo "<td>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
                
            </tbody>
            </table>
       
        
    <script>
        window.print();
    </script>
</body>
</html>