<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIMPLE CRUD | LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  {{-- <style>
    h1 {
      border: 1px solid grey ;
      border-radius: 20px;
      color: black;
      padding: 5px;
    }

    .btn {
      opacity: 20%;
    }

    .btn:hover{
      background-color:grey;
      border: 1px solid grey;
      opacity: 100%;
      transition-duration: 0.3s;
    }
  </style> --}}
  <body>

    <div class="container mt-5">
        <h1 class="text-center mb-5" >DATA PEMBELI</h1>  
        <a href="{{ route('pembeli.create') }}" class="btn btn-primary mb-3">TAMBAH DATA</a>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
             {{session('success')}}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table">   
                    <thead>
                        <th>NO</th>
                        <th>ID</th>
                        <th>NAMA</th>
                        <th>HARGA</th>
                        <th>PRODUK</th>
                        <th>AKSI</th>
                    </thead>
                    <tbody>
                      @if ($pembeli->count()>0)
                      @foreach ($pembeli as $no => $hasil)
                      <tr>
                        <th>{{ $no+1 }}</th>
                        <td>{{ $hasil->idpembeli }}</td>
                        <td>{{ $hasil->nama }}</td>
                        <td>{{ $hasil->harga }}</td>
                        <td>{{ $hasil->produk }}</td>
                        <td>
                          <form action="{{route('pembeli.destroy', $hasil->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <a href= "{{route( 'pembeli.edit', $hasil->id) }}" class="btn btn-success btn-sm">EDIT</a>
                            <button class="btn btn-danger btn-sm">HAPUS</button>
                          </form>
                        </td>
                        
                        </tr>
                      @endforeach
                      
                          
                      @else
                      <tr>
                        <td colspan="10" align="center">TIDAK ADA DATA</td>
                       </tr>
                      @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>