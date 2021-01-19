<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id_buku'];
  $judul = $_POST['judul_buku'];
  $pengarang = $_POST['pengarang'];
  $penerbit = $_POST['penerbit'];
  $tahun = $_POST['tahun_terbit'];
  $harga = $_POST['harga_buku'];
  $stok = $_POST['stok_buku'];

	$query = "INSERT INTO toko_buku (
  ID_BUKU,JUDUL_BUKU,PENGARANG,PENERBIT,TAHUN_TERBIT,HARGA_BUKU,STOK_BUKU) VALUES ('".$id."','".$judul."','".$pengarang."','".$penerbit."','".$tahun."','".$harga."','".$stok."')";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Buku berhasil ditambahkan'); 
	window.location.href='tokobuku.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Buka gagal ditambahkan');
	window.location.href='tokobuku.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: tokobuku.php'); 
} 