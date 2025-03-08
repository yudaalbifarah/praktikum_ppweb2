<?php 
if (!isset($_POST['nama'])) {
    echo '<script>alert("anda harus mengisi form terlbih dahulu")</script>
    <meta http-equiv="refresh" content="0; url=form-nilai.php">';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Nilai Mahasiswa</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
         <div class="container">
            <table border="1">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $_POST['nama'] ?></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><?= $_POST['nim'] ?></td>
                </tr>
                <tr>
                    <td>Rombel</td>
                    <td>:</td>
                    <td><?= $_POST['rombel'] ?></td>
                </tr>
                <tr>
                    <td>Mata Kuliah</td>
                    <td>:</td>
                    <td><?= $_POST['matkul'] ?></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><?= $_POST['nilaitugas'] ?></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><?= $_POST['nilaiuts'] ?></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><?= $_POST['nilaiuas'] ?></td>
                </tr>
                <tr>
                    <td>Predikat</td>
                    <td>:</td>
                    <td>
                        <?php 
                        $tugas = $_POST['nilaitugas'] *(35/100);
                        $uts = $_POST['nilaiuts'] *(30/100);
                        $uas = $_POST['nilaiuas'] *(35/100);
                        $total = $tugas + $uts + $uas;
                        if ($total <= 35) {
                            $pred = "E";
                            echo "E";
                        } elseif ($total <= 55) {
                            $pred = "D";
                            echo "D";
                        } elseif ($total <= 69) {
                            $pred = "C";
                            echo "C";
                        } elseif ($total <= 84) {
                            $pred = "B";
                            echo "B";
                        } elseif ($total <= 100) {
                            $pred = "A";
                            echo "A";
                        } else {
                            echo "Tida$pred =lid";echo "Tida
                            k Valid";
                        }
                        ?>    
                    </td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><?php
                        switch ($total) {
                            case 'A':
                                echo "Sangat Bagus";
                                break;
                            case 'B':
                                echo "Bagus";
                                break;
                            case 'C':
                                echo "Cukup";
                                break;
                            case 'D':
                                echo "Dongo";
                                break;
                            case 'E':
                                echo "Muka Gilee";
                                break;
                            default :
                                echo "Tidak Valid";
                                break;
                            }
                    ?>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>