<?php
/* membuat koneksi */
$conn  = mysqli_connect('p:172.18.0.2:3306', 'root', 'root', 'SOD');

/* mengecek koneksi */
if (!$conn) {
    die("Maaf koneksi anda gagal : " . mysqli_connect_error());
}else{
   echo "<h1>Yes! Koneksi Berhasil..</h1>";
}

$Email = $_POST["Email"];
$NamaDepan = $_POST["NamaDepan"];
$NamaBelakang = $_POST["NamaBelakang"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];


$sql = "INSERT INTO `User` (`Email`, `NamaDepan`, `NamaBelakang`, `Username`, `Password`) VALUES ('$Email', '$NamaDepan', '$NamaBelakang', '$Username', '$Password');";

if (mysqli_query($conn, $sql)) {
      echo "<h1>Username $username berhasil terdaftar</h1>
            <a href='pages/login.php'>Kembali Login</h1>
         ";
} else {
      echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
mysqli_close($conn);
?>