<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color:#d1e6d4">
    <?php
    include_once("../navbar.php");
    ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-8 m-auto">
                <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
                    <div class="card-header">
                        <b>FORM TAMBAH DATA</b>
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Menu</label>
                                <input name="nama_menu" type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis</label>
                                <select class="form-control" name="nama_jenis" id="">
                                    <option value="">-Pilih Jenis-</option>
                                    <?php 
                                        //kode untuk looping datat jurusan
                                        include_once('../koneksi.php');
                                        $qry_jur = "SELECT * FROM jenis_menu";
                                        $data_jur = mysqli_query($koneksi,$qry_jur);
                                        foreach($data_jur as $item_jur){
                                    ?>
                                    <option value="<?=$item_jur['id']?>"><?=$item_jur['nama_jenis']?></option>
                                    <?php
                                        //penutup kode looping jurusan
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Supplier</label>
                                <select class="form-control" name="nama_supplier" id="">
                                    <option value="">-Pilih Supplier-</option>
                                    <?php 
                                        //kode untuk looping datat jurusan
                                        include_once('../koneksi.php');
                                        $qry_jur = "SELECT * FROM supplier";
                                        $data_jur = mysqli_query($koneksi,$qry_jur);
                                        foreach($data_jur as $item_jur){
                                    ?>
                                    <option value="<?=$item_jur['id']?>"><?=$item_jur['nama_supplier']?></option>
                                    <?php
                                        //penutup kode looping jurusan
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Harga</label>
                                <input name="harga" type="number" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Stok</label>
                                <input name="stok" type="number" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                <input name="foto_menu" accept="image/*" type="file" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>