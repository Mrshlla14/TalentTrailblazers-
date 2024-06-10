<?php 
include '../koneksi.php';

if(isset($_POST['simpan'])) {
    $categories = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];
   
    var_dump($categories, $price, $description);

    $sql = "INSERT INTO categories VALUES(NULL, '$categories', '$price','$description')";

    if(empty($categories) || empty($price)|| empty($description)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'categories-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Ditambahkan');
                window.location = 'category.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'categories-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id         = $_POST['id'];
    $categories = $_POST['category'];
    $price      = $_POST['price'];
    $description = $_POST['description'];
   
    $sql = "UPDATE categories SET 
            categories = '$categories',
            price = '$price',
            description = '$description'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Diubah');
                window.location = 'category.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'categories-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM categories WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Categories Berhasil Dihapus');
                window.location = 'category.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Categories Gagal Dihapus');
                window.location = 'category.php';
            </script>
        ";
    }
}else {
    header('location: category.php');
}
