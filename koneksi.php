<? php
$host="localhost";
$user="root";
$password="";
$db="crud";
$kon = mysqli_conncet($host,$user,$password,$db);
if (!$kon) {
    die("Koneksi Gagal:".mysqli_conncet_error());
}
?>