<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<style>
    body {
        background-color: black;
    }
</style>
    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card card-primary bg-warning text-black">
                    <div class="card-header bg-secondary">
                        <h5 class="card-title">Detail mahasiswa</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="">Nim : <?php echo $nim;?></label>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap : <?php echo $nama_lengkap;?></label>
                            </div>
                            <div class="form-group">
                                <label for="">Kampus : <?php echo $kampus;?></label>
                            </div>

                            <div class="form-group">
                                <label for="kota">Asal Daerah : <?php echo $asal_kota;?></label>
                               
                            </div>
                            <div class="form-group">
                                <label for="jk">
                                    Jenis Kelamin : <?php echo $jk;?>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="jk">
                                    Email : <?php echo $email;?>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="jk">
                                    foto : <?php echo "<img src='" . $link_foto . "' class='img-fluid'>" ?>
                                </label>
                            </div>
                            <p><?php echo $foto;?></p>
                            <p><?php echo $tmp;?></p>

                            <!-- <p> -->
                                <!-- <?php echo $foto_baru;?> -->
                            <!-- </p> -->
                            
                            <p><?php echo $path;?></p>
                            <hr style="border-color: white";>
                            <a href="latihan2.php">Kembali ke latihan 2</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>