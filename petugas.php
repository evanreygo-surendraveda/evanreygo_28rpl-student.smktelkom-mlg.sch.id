<?php
//memasukkan file config.php
include('../js/config.php');
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Pepustakaan Moklet</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">

     <script>
       $(document).ready(function(){
         $("#myModal").on("show.bs.modal", function(event){
           var button = $(event.relatedTarget);

           var tittleData = button.data("title");
           $(this).find(".modal-title").text(titleData);
         });
       });
     </script>

     <style>
        .bs-example{
            margin: 20px;
        }
        .background{
          background-color: #fff;
          font-family: 'Baloo Thambi 2', cursive;;
        }
    </style>

   </head>
   <body class="background">

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../js/admin.php">Perpustakaan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Petugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../anggota/member.php">Member</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../buku_untuk_petugas/tampil_buku.php">Buku</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container" style="margin-top:20px">
<h2>Daftar Member</h2>
<hr>
<table class="table table-striped table-hover table-sm table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>NO</th>
      <th>nama</th>
      <th>telp</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //query ke database SELECT tabel anggota urut berdasarkan id yang paling besar
    $sql = mysqli_query($koneksi, "SELECT * FROM petugas ORDER BY id_petugas DESC") or die(mysqli_error($koneksi));
    //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
    if(mysqli_num_rows($sql) > 0){
      //membuat variabel $no untuk menyimpan nomor urut
      $no = 1;
      //melakukan perulangan while dengan dari dari query $sql
      while($data = mysqli_fetch_array($sql)){
        ?>
        <!-- menampilkan data perulangan -->
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $data['nama_petugas']; ?></td>
          <td><?php echo $data['telp']; ?></td>
          <td>
            <a href="#edit<?php echo $data['id_petugas']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
            <a href="#del<?php echo $data['id_petugas']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
              <?php include('modal_form_petugas.php'); ?>
          </td>
        </tr>
        <?php
        $no++;
      }
    //jika query menghasilkan nilai 0
    }else{
      echo '
      <tr>
        <td colspan="6">tidak ada data</td>
      </tr>
      ';
    }
    ?>
  <tbody>
</table>

    <div>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal" data-title="tambahPetugas"><b>Tambah Data</b></button>
    </div>
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="tambah_petugas.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data Anggota</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label">Nama:</label>
                            <input type="text" name="nama_petugas" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Telp:</label>
                            <input type="text" name="telp" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

   </body>
 </html>
