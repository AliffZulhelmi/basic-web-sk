<?php
# nama host. localhost merupakan default
$nama_host = "localhost";

# username bagi SQL. root merupakan default
$nama_sql = "root";

# password bagi SQL. masukkan password anda.
$pass_sql = "";

# nama pangkalan data yang anda telah bangunkan sebelum ini.
$nama_db = "aliff";

# membuka hubungan berjaya dibuka
$condb = mysqli_connect($nama_host, $nama_sql, $pass_sql, $nama_db);

# menguji adakah hubungan berjaya dibuka
if (!$condb)
{
    die("Sambungan ke pangkalan data gagal");
}
else
{
    #echo "Sambungan ke pangkalan data berjaya";
}
?>