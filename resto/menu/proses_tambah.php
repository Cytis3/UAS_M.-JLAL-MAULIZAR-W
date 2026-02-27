<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $nama_menu = $_POST['nama_menu'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $nama_supplier = $_POST['nama_supplier'];
    $nama_jenis = $_POST['nama_jenis'];
    $nama_foto = $_FILES['foto_menu']['name'];
    $tmp_foto = $_FILES['foto_menu']['tmp_name'];

    #3. Query Insert (proses tambah data)
    $query = "INSERT INTO menu(nama_menu,harga,stok,suppliers_id,jeniss_id,foto_menu) 
    VALUES ('$nama_menu','$harga','$stok','$nama_supplier','$nama_jenis','$nama_foto')";

    move_uploaded_file($tmp_foto,"../fotomenu/$nama_foto");

    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>