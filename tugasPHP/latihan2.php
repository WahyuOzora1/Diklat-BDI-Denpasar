<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
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
                        <h5 class="card-title">Form data mahasiswa</h5>
                    </div>
                    <div class="card-body">
                        <form action="proses.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Nim</label>
                                <input type="number" name="nim" class="form-control" placeholder="Masukkan NIM Anda">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
                            </div>


                            <div class="form-group">
                                <label for="">Kampus</label>
                                <input type="text" name="kampus" class="form-control" placeholder="Masukkan nama Kampus Anda">
                            </div>

                            <div class="form-group">
                                <label for="kota">Asal Daerah</label>
                                <select class="form-control" id="kota" name="asal_kota">
                                    <option>Jepara</option>
                                    <option>Kudus</option>
                                    <option>Pati</option>
                                    <option>Demak</option>
                                    <option>Semarang</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="lakilaki" value="Laki-Laki" checked>
                                <label class="form-check-label" for="lakilaki">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="perempuan">
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="foto">Upload Foto</label>
                                <input type="file" class="form-control-file" id="foto" name="foto">
                            </div>

                            <hr style="border-color: white" ;>
                            <button type="submit" class="btn btn-secondary w-50" name="submit">Submit</button>

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