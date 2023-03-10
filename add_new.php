<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];
    $status = $_POST['status'];
    
    $sql = "INSERT INTO `karyawan`(`id`,`name`,`email`,`address`,`gender`, `position`, `status`) 
    VALUES (NULL, '$name','$email','$address','$gender','$position','$status')";

    $result = mysqli_query($conn,$sql);

    if ($result) {
        header("Location: index.php?msg=New record created successfully");
    }
    else {
        echo "Failed: ". mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Karyawan</title>
</head>

<body>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="backround-color: rgb(177, 230, 4);">
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Penambahan Data Karyawan</h3>
            <p class="text-muted">Lengkapilah form dibawah</p>   
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Nama :</label>
                        <input type="text" class="form-control" name="name" placeholder="Min Suga"><br>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email :</label>
                        <input type="email" class="form-control" name="email" placeholder="min@example.com">
                    </div>

                    <div class="col">
                        <label class="form-label">Alamat :</label>
                        <input type="text" class="form-control" name="address" placeholder="Jl. Kenangan"><br>
                    </div>

                    <div class="form-group mb-3">
                        <label>Jenis Kelamin :</label> &nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                        <label for="male" class="form-input-label">Laki-Laki</label> &nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                        <label for="male" class="form-input-label">Perempuan</label><br>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Posisi :</label>
                        <input type="text" class="form-control" name="position" placeholder="Fullstack">
                    </div>

                    <div class="form-group mb-3">
                        <label>Status :</label> &nbsp;
                        <input type="radio" class="form-check-input" name="status" id="parttime" value="parttime">
                        <label for="parttime" class="form-input-label">Parttime</label> &nbsp;
                        <input type="radio" class="form-check-input" name="status" id="fulltime" value="fulltime">
                        <label for="fulltime" class="form-input-label">Fulltime</label><br>
                    </div>

                    <div>
                        <button type="submit" name="submit" class="btn btn-outline-success">Simpan</button>
                        <a href="index.php" class="btn btn-outline-danger">Batal</a>
                    </div>
                </div>
            </form>    
        </div>
    </div>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>