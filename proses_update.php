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
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  toko_buku  SET JUDUL_BUKU ='".$judul."', PENGARANG ='".$pengarang."', PENERBIT ='".$penerbit."', TAHUN_TERBIT ='".$tahun."', HARGA_BUKU ='".$harga."', STOK_BUKU ='".$stok."' WHERE ID_BUKU = '".$id."' ";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Buku berhasil diubah'); window.location.href='tokobuku.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Buku gagal diubah'); window.location.href='tokobuku.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: tokobuku.php'); 
}