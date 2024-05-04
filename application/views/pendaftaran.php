<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        
        <button class="primary-default-btn" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus" style="font-size:24px; margin-right: 5px;"></i> Daftar sekarang</button>
    </div>


    <table border="1">
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>umur</td>
            <td>Jenis Kelamin</td>
            <td>kategori</td>
            <td>Nomer BPJS</td>
            <td>Nomer HP</td>
            <td>riwayat_penyakit</td>

        </tr>
        <?php
        $nomer = 1;

        foreach($daftar as $data) {
        ?>
        <tr>
            <td><?php echo $nomer++ ?></td>
            <td><?php echo $data->nama ?></td>
            <td><?php echo $data->umur ?></td>
            <td><?php echo $data->jk ?></td>
            <td><?php echo $data->kategori ?></td>
            <td><?php echo $data->no_bpjs ?></td>
            <td><?php echo $data->no_hp ?></td>
            <td><?php echo $data->riwayat_penyakit ?></td>
            

      
        </td>
        </tr>
        <?php } ?>
    </table>
        




    



















    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
       <form action="<?php echo base_url('Dashboard/tambah_pasien')?>" method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control border">
                </div>

                <div class="form-group">
                <label>Umur</label>
                <input type="text" name="umur" class="form-control border">
                </div>

                <div class="form-group">
                <label>Jenis Kelamin : </label>
                <input type="radio" name="gender" value="laki-laki">laki-laki <input type="radio" name="gender" value="perempuan">perempuan
                </div>

                <div class="form-group">
                    <select name="kategori" class="form-control">
                        <option value="bpjs">bpjs</option>
                        <option value="umum">umum</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>No BPJS</label>
                    <input type="text" name="no_bpjs" class="form-control border">
                </div>

                <div class="form-group">
                    <label>Nomer Hp</label>
                    <input type="text" name="no_hp" class="form-control border">
                </div>

                <div class="form-group">
                    <label>Riwayat penyakit</label>
                    <textarea name="riwayat"class="form-control border" ></textarea>
                </div>

                <button type="submit" class="btn primary-default-btn">Kirim</button>
            </div>

    </div>
     </form>
      
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>

</body>
</html>







