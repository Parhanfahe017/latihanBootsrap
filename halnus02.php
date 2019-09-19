


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/asets/css/bootsrap-min.css">

         <title>Hello, Belajar Bootsrap!</title>
      </head>
    <body>


     <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="/">Parhan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="latihan01.php">latihan 1<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="latihan02">latihan 2</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
</nav>



     <div class="container">
        <div class="row"style="padding:20px;">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h2>BUKU<h2></div>
                        <div class="card-body">

///hidden 
               <form action="" method="post">
                   <div class="form-group">
           <input type="hidden" name="nama" value="nama"/>
             <input type="hidden" name="alamat" value="alamat"/>
                 <input type="hidden" name="laki" value="jenis_kelamin"/>
                     <input type="hidden" name="tanggal" value="tanggal membelian"/>
                          <input type="hidden" name="jumlah" value="jumlah"/>           

                              <label for="">Judul Buku</label>
                            <input type="text" name="judul" class="form-control">                                                 
                            </div>
                            
     <div class="form-group">
    <label for="">Kode Buku</label>                      
        <select name="kode">
         <option value="simplemen">Simplemen</option>
         <option value="Sin">Sin</option>
         <option value="Conan">Conan</option>
         <option value="Dora">Dora</option>
         <option value="Dragon">Dragon</option>
         <option value="Naruto">Naruto</option>
        </select>
                        </div>

         <div class="form-group">
            <label for="">jenis Buku</label>                      
            <select name="jenis_buku">
            <option value="jenis" class="form-control">Jenis</option>
                <option value="horor">Horor</option>
                <option value="Fiksi">Fiksi</option>
                <option value="Romantis">romantis</option>
                <option value="">Dora</option>
                <option value=""></option>
                <option value=""></option>
        </select>
                        </div>


<div class="form-group">
    <label for="">Harga Buku</label>
    <input type="number" class="form-control">
    </div>
        
                <div class="form-group">
                   <button type="submit" name="proses" class="btn btn-primary">Simpan
                   </button>
                   <button type="reset" name="" class="btn btn-danger">Resert</button>
                   </div>

                 </form>
 <?php
    if(isset($_POST['proses'])){
        $a = $_POST['nama'];
        $b = $_POST['alamat'];
        $c = $_POST['laki'];
        $d = $_POST['tanggal'];
        $e = $_POST['jumlah'];

        $aa =  $_POST['judul'];
        $aa =  $_POST['kode'];
        $aa =  $_POST['jenis_buku'];
    }
?>
                </div>
                </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-12" style="background:blue">
          <center>
              <h2>Hasil Buku Yang di Pesan</h2>
          </center>
                 <div class="table-responsive">
                   <table class="table">
                     <tr>
                     <th>nomber</th>
                     <th>nama</th>
                     <th>alamat</th>
                     <th>Jenis Kelamin</th>
                     <th>tanggal</th>
                     <th>Jumlah Buku</th>
                     <th>Judul Buku</th>
                     <th>Kode Buku</th>
                     <th></th>
                     </tr>
                       <tr>
                       <th>I</th>
                       <th><?= $a; ?></th>
                       <th><?= $b; ?></th>
                       </tr>
                   </table>
                   </div>
        </div>
      </div>
    </div>
                             







                     <script src=/"asets/js/bootsrap.bundle.min.js"></script>
                             <script src=/"asets/js/bootsrap.bundle.js"></script>
                                <script src=/"asets/js/bootsrap.min.js"></script>

</body>
</html>
