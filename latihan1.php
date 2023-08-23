<?php 
    $nama = "Rafif Fernanda";
    $kuliah = "Universitas Jember";
    $jurusan = "Informatika";
    $asal = "Kota Probolinggo";
    $hobi = "Nonton film, Menggambar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1_MSIB5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><?php echo"$nama"; ?></td>
                </tr>
                <tr>
                    <th>Kuliah</th>
                    <td><?php echo"$kuliah"; ?></td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td><?php echo"$jurusan"; ?></td>
                </tr>
                <tr>
                    <th>Asal</th>
                    <td><?php echo"$asal"; ?></td>
                </tr>
                <tr>
                    <th>Hobi</th>
                    <td><?php echo"$hobi"; ?></td>
                </tr>
            </table>
        </div>     
    </div> 
</body>
</html>