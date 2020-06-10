<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d02c2604b8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    

    <title>Data Mahasiswa</title>
  </head>
  <body>    
    <div class="main">         
            <a href="/tambah" type="button" class="btn btn-dark mb-5">
                     Tambah Mahasiswa
            </a> 
            <table class="table table-responsive-sm">
       <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jenis Kelamin</th>
                <th>Dosen Wali</th>
                <th></th>
            </tr>
       </thead>
    
       @if($data->count() != 0)
        @for($i= 0; $i < $data->count(); $i++)
       <tr>
        <td>{{ $data[$i]->id }}</td>
        <td>{{ $data[$i]->nama }}</td>
        <td>{{ $data[$i]->nim }}</td>
        <td>{{ $data[$i]->jenis_kelamin }}</td>
        <td>{{ $data[$i]->dosenwali->nama }}</td>
        <td class="d-flex justify-content-center">   
            <a href="/edit/{{ $data[$i]->id }}" class="btn btn-success mr-2">EDIT</a>
            
        <form action="/hapus/{{ $data[$i]->id }}" method="post">
            @method('post')
            @csrf
            <button type="submit" class="btn btn-danger" >HAPUS</button>
        </form>
         </td>
       </tr>
       @endfor

        @else
        <tr><td colspan="5"><h5>Tidak ada data Mahasiswa</h5></td></tr>
        
        @endif
    </table> 
    </div>
    <style>
        .main{
            padding: 110px;
        }  
        li{            
            width: 350px;
        } 
        .myBtn{
            padding: 20px 0px;
        }
        .item{
            width: 100px;
        }
        .buton{
            width: 110px;
        }
        .edit{
            position: absolute;
            left: 0;
            top: 0;
            padding: 12px 18px;
            height: 100%;
            color: royalblue;
        }   
        .trash{
            right: 0;            
            position: absolute;            
            top: 0;
            padding: 12px 18px;
            height: 100%;
            color: red;
        }  

        .edit:hover{
            background-color: royalblue;
            color: white;
        }

        .trash:hover{
            background-color: red;
            color: white;
        }
       
    </style>
</html>
