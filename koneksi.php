<?php
//membangun koneksi
$username="abie_10025";
$password="abie_10025";
$database="LOCALHOST/XE";

$koneksi=oci_connect($username,$password,$database);

if(!$koneksi){
$err=oci_error();
echo "Gagal tersambung ke ORACEL". $err['text'];
} else {
	//echo "koneksi berhasil"
}

?>