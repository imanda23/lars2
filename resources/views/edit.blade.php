<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/d02c2604b8.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .main{
            padding: 100px;
        }     
        .form-group{
            padding: 0px 0px;
            left: 1080px;
        }     
    </style>

    <title>Edit</title>
</head>
<body>
<div class="main">
<a href="/">Home</a>
<h3>Sunting Data Mahasiswa</h3>
        <form action="/update/{{ $data->id }}" method="post">
        @method('post')
        @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="Nama" value="{{ $data->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="Nim" value="{{ $data->nim }}">
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
                    @foreach($doswal as $d)                                         
                    <option value="{{ $d->id }}">{{ $d->nama  }} ( {{ $d->nip }} )</option>   
                    @endforeach                                    
                </select>
            </div>
            <div class="form-group row">  
                <input type="hidden" class="form-control" name="myID" value="{{ $data->id }}">                      
                <button type="submit" name="Edit" class="btn btn-dark">Edit</button>
            </div>
        </form>
    </div>   
</body>
</html>