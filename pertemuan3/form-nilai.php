<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
    <div class="container"> 
        <div class="card">
            <form method="post" action="hasil-nilai.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukan Nama Lengkap" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label> 
                    <div class="col-8">
                    <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rombel" class="col-4 col-form-label">Rombel</label> 
                    <div class="col-8">
                    <input id="rombel" name="rombel" placeholder="Masukan Rombel" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select" required="required">
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="Basis Data">Basis Data</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilaitugas" class="col-4 col-form-label">NIlai Tugas</label> 
                    <div class="col-8">
                    <input id="nilaitugas" name="nilaitugas" placeholder="Masukan Nilai Tugas" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilaiuts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-8">
                    <input id="nilaiuts" name="nilaiuts" placeholder="Masukan Nilai UTS" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilaiuas" class="col-4 col-form-label">NIlai UAS</label> 
                    <div class="col-8">
                    <input id="nilaiuas" name="nilaiuas" placeholder="Masukan NIlai UAS" type="text" class="form-control" required="required">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>