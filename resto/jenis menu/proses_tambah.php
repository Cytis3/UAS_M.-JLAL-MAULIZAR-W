<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $nama_jenis = $_POST['nama_jenis'];

    #3. Query Insert (proses tambah data)
    $query = "INSERT INTO jenis menu (nama_jenis) 
    VALUES ('$nama_jenis')";

    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>