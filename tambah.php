<?php
    require 'functions.php';

    if(isset($_POST["submit"])) {
        if( isset($_POST["submit"])){
            //jika sudah ditekan dijalankan function tambah
            if(tambah($_POST) > 0) {
                echo "
                    <script>
                        alert('data berhasil ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('data gagal ditambahkan!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="name">Nama</label>
                <input type="text" name="name" id="name">
            </li>
            <li>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="address">Address</label>
                <input type="text" name="address" id="address">
            </li>
            <li>
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </li>
            <li>
                <label for="posistion">Position</label>
                <input type="text" name="position" id="position">
            </li>
            <li>
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="parttime">Parttime</option>
                    <option value="fulltime">Fulltime</option>
                </select>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>