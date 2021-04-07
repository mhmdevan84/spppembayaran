  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
            <div class="card card-warning card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NISN</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>ID Kelas</th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>ID SPP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($siswa_laporan->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $value->nisn; ?></td>
                            <td><?php echo $value->nis; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->id_kelas; ?></td>
                            <td><?php echo $value->alamat; ?></td>
                            <td><?php echo $value->no_telp; ?></td>
                            <td><?php echo $value->id_spp; ?></td>
                        </tr><?php
                        endforeach;
                        ?>
                        </tbody>
                    </table> 
          <!-- /.col-md-6 -->
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>