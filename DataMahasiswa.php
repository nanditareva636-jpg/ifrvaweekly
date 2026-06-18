<?php
require 'fungsi.php';

$qmahasiswa = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($qmahasiswa);

?>




<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <a href="index.php">Home</a>
    <a href="profile.php">Profil</a>
    <a href="contact.php">Contact</a>
    <a href="datamahasiswa.php">Data Mahasiswa</a>
</nav>

<div class="container">

    <div class="card">
        <h2>Data Mahasiswa</h2>

        <a href="inputdata.php">
            <button>+ Tambah Data</button>
        </a>

        <table border="1" cellpadding="Spx">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No.HP</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
            <?php  
            $i = 1;
            foreach($mahasiswas as $mhs)
                {
            ?>

            <tr>
                <td>1</td>
                <td><?php echo $mhs["nama"]?></td>
                <td><?php echo $mhs["nim"]?></td>
                <td><?php echo $mhs["jurusan"]?></td>
                <td><?php echo $mhs["email"]?></td>
                <td><?php echo $mhs["no_hp"]?></td>
               <td><img src="assets/images/<?php echo $mhs['foto']; ?>" width="70"></td>
                <td><a href="editdata.php"><button>EDIT</button></a> | <a href="deletedata.php"><button>DELETE</button></a></td>
            </tr>
            <?php
                }
                ?>

            <tr>
                <td>2</td>
                <td>Reva Nandita</td>
                <td>13182420068</td>
                <td>Informatika</td>
                <td>nanditareva636@gmail.com</td>
                <td>08995855520</td>
                <td><img src="assets/images/reva.jpg.jpeg" width="70"></td>
                <td><a href="editdata.php"><button>EDIT</button></a> | <a href="deletedata.php"><button>DELETE</button></a></td>
            </tr>
    

        </table>
    </div>

</div>

</body>
</html>