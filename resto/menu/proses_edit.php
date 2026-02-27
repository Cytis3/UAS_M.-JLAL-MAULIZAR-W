<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id = $_POST['id'];
    $nama_menu = $_POST['nama_menu'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $nama_supplier = $_POST['nama_supplier'];
    $nama_jenis = $_POST['nama_jenis'];
    $nama_foto = $_FILES['foto_menu']['name'];
    $tmp_foto = $_FILES['foto_menu']['tmp_name'];

    if($nama_foto != ""){
        $qry = "SELECT * FROM menu WHERE id='$id'";
        $hapus_foto = mysqli_query($koneksi,$qry);
        $data = mysqli_fetch_array($hapus_foto);
        $nama_foto_hapus = $data['foto_menu'];
        $lokasi_foto = "../fotomenu/$nama_foto_hapus";
        if(file_exists($lokasi_foto)){
            unlink($lokasi_foto);
        }

        #3. Query Insert (proses edit data)
        $query = "UPDATE menu SET nama_menu='$nama_menu', harga='$harga', stok='$stok',suppliers_id='$nama_supplier',jeniss_id='$nama_jenis',foto_menu='$nama_foto'
        WHERE id='$id'";

        #hapus foto
        // $lokasi_foto = "../fotosiswa/$nama_foto";
        // if(file_exists($lokasi_foto)){
        //     unlink($lokasi_foto);
        // }

        #tambahkan foto
        move_uploaded_file($tmp_foto,"../fotomenu/$nama_foto");
    }else{
        #3. Query Insert (proses edit data)
        $query = "UPDATE menu SET nama_menu='$nama_menu', harga='$harga', stok='$stok',suppliers_id='$nama_supplier',jeniss_id='$nama_jenis' 
        WHERE id='$id'";
    }

    
    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>