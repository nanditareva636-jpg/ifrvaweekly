<?php
$conn = mysqli_connect("localhost", "root", "root", "ifrvaweekly");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function tampildata($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function inputdata($data, $foto)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $prodi = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);
   
    $namafoto = $foto["name"];
    $tmpfoto = $foto["tmpfoto"];

    if(move_upload_file($tmpfoto,$path))
        {
            $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto)
          VALUES('$nama', '$nim', '$prodi', '$email', '$nohp', '$foto')";

    mysqli_query($conn, $query);

        }

    $path = "assets/images/$namafoto";

    return mysqli_affected_rows($conn);
}

function deletedata($id)
{
    global $conn;
    $id = intval($id);

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function editdata($data, $id)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $prodi = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $nohp = htmlspecialchars($data["nohp"]);
    $foto = htmlspecialchars($data["foto"]);

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto)
          VALUES('$nama', '$nim', '$prodi', '$email', '$nohp', '$foto')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>

