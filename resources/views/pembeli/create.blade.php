<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Menambahkan Data</h1>  
        <div class="card">
            <div class="card-body">
       <form action="{{ route('pembeli.store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="idpembeli" class="form-label">ID-PEMBELI</label>
          <input type="text" class="form-control" name="idpembeli" id="idpembeli" >
        </div>

        <div class="mb-3">
          <label for="nama" class="form-label">NAMA</label>
          <input type="text" class="form-control" name="nama" id="nama" >
        </div>

        <div class="mb-3">
          <label for="harga" class="form-label">HARGA</label>
          <input type="text" class="form-control" name="harga" id="harga" >
        </div>

        <div class="mb-3">
          <label for="produk" class="form-label">PRODUK</label>
          <input type="text" class="form-control" name="produk" id="produk" >
        </div>
        <button type="submit" class="btn btn-primary ">Simpan</button>
      </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>