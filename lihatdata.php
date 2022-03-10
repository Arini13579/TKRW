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
    <div class="card-body">
        <div class="mt-5 col-sm-6 container">
            <div class="card-header bg-secondary text-white ">Data Dosen</div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Id</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
        include './database/koneksi.php';
        $query = "SELECT * FROM dosen";  
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows ( $result )> 0){
            while ($data = mysqli_fetch_array($result)) {?>
                <tr>
                    <td><?php echo $data["Nama"]?></td>
                    <td><?php echo $data["Id"]?></td>
                    <td><?php echo $data["Alamat"]?></td>
                    <td><?php echo $data["NoHp"]?></td>
                    <td>
                        <button>Hapus</button>
                        <button> <a href="./database/editdata.php">Edit</a></button>
                </tr>
                <?php }
        }
        else
         echo "data tdk ada ";        
        ?>
            </table>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous">
            </script>
        </div>
    </div>
    </div>

</body>

</html>