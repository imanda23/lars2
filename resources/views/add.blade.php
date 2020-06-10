<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">

    <style>
        .main{
            padding: 120px;
        }     
    </style>

    <title>Tambah Mahasiswa</title>
</head>
<body>
    <div class="container m-5">
        <a href="/">Beranda</a>
        <h3>Tambahkan Mahasiswa</h3>
        <form action="/store" method="get">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="input" class="form-control" name="Nama" placeholder="Masukkan Nama Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                <input type="input" class="form-control" name="Nim" placeholder="Masukkan NIM Mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis kelamin</label>
                <div class="form-check form-check-inline">                        
                    <input class="form-check-input" type="radio" name="Jenis_kelamin" id="inlineRadio1" value="Laki-laki">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="Jenis_kelamin" id="inlineRadio2" value="Perempuan">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>   
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Dosen Wali</label>
                <select class="custom-select custom-select-lg col-md-6" name="doswal">
                    <option value="" selected>-- Pilih Dosen --</option>
                    @foreach($doswal as $d)                                         
                    <option value="{{ $d->id }}">{{ $d->nama  }} ( {{ $d->nip }} )</option>   
                    @endforeach                                     
                </select>
            </div>
            <div class="form-group col">                        
                <input type="submit" name="Submit" class="btn btn-dark" value="Simpan"></input>
            </div>
        </form>
    </div>   
</body>
</html>