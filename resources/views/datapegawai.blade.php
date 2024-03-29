<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    	<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <link rel="stylesheet" href="https//cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css" />
    <script src="https//cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>

    


    <title>CRUD LARAVEL 8</title>
</head>

<body>
    <h1 class="text-center mb-4">Data Pegawai Perpustakaan</h1>

    <div class="container">
        <a href="/tambahpegawai"  class="btn btn-success">Tambah +</a>

        <div class="row g-3 align-items-center mt-2">
            <div class="col-auto">
            <form action="/pegawai" method="GET">    
              <input type="search" id="inputPassword6" name="search"  class="form-control mx-sm-3" aria-describedby="passwordHelpInline"> 
            </form>   
            </div>
            
        </div>
        <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
               {{ $message }}
              </div>
             @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telpon</th>
                        <th scope="col">Peminjaman</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                
                    @php
                       $no= 1;
                   @endphp
                    @foreach ($data as $row)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->nama}}</td>
                        <td>
                            <img src="{{ asset('fotobuku/'.$row->foto) }}" alt="" style="width:50px;">
                        </td>
                        <td>{{ $row->jeniskelamin }}</td>
                        <td>0{{ $row->notelpon }}</td>
                        <td>{{ $row->created_at->format('D M Y')}}</td>
                        <td>

                            <a href="/tampilkandata/{{ $row->id }}"  class="btn btn-info">Edit</a>
                            <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                    @endforeach
             
                </tbody>
            </table>
    
            

        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
