<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['detail-nama'];
    $nomortelp = $_POST['detail-nomorrelp'];
    $kategori = $_POST['detail-kategori'];
    $harga = $_POST['detail-harga'];
    $status = $_POST['detail-status'];
    $tanggal = date('Y-m-d');

    $sql = "INSERT INTO tb_aplications VALUES(null, '$nama','$nomortelp', '$kategori', '$harga', '$tanggal', '$status' )";

    if (empty($nama) || empty($kategori) || empty($harga) ||  empty($nomortelp)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = '../index.php';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Transaction Berhasil');
                window.location = '../index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = '../index.php';
            </script>
        ";
    }
} else {
    header('location: ../index.php');
}
