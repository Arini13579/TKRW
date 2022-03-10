<!DOCTYPE HTML>
<html>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<head>
    <title></title>
</head>

<body>
    <div class="mt-5 col-sm-6 container">
        <div class="card-header bg-secondary text-white ">Edit Data</div>
        <div class="card-body">
            <?php
        include 'koneksi.php';
        $query = "SELECT * FROM dosen";  
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
}?>
            <form action="./database/simpan.php" class="table-secondary" method="POST">

                <div class="form-row">
                    <div class="form-group col-md-5">
                        <div class="form-group col-md">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo($data['Nama']);?>">
                        </div>
                        <div class="form-group col-md">
                            <label>Id Dosen</label>
                            <input type="text" class="form-control" name="id" value="<?php echo($data['Id']);?>">
                        </div>
                        <div class="form-group col-md">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?php echo($data['Alamat']);?>"
                                placeholder="input alamat">
                        </div>
                        <div class="form-group col-md">
                            <label>No Hp</label>
                            <input type="text" class="form-control" name="nohp" value="<?php echo($data['NoHp']);?>">
                            <br>
                        </div>
                        <div class="form-group col-md">
                            <button type="submit" class="btn btn-secondary"> <a href="./update.php">Simpan</a></button>

                        </div>

                    </div>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>