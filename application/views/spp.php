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
            <div class="card card-secondary card-secondary">
              <div class="card-header">
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordesuccess table-hover">
                    <thead>
                        <tr>
                            <th>ID SPP</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($spp->result() as $value):
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $value->id_spp; ?></td>
                            <td><?php echo $value->tahun; ?></td>
                            <td><?php echo $value->nominal; ?></td>
                            <td>
                                <a href="<?php echo base_url('spp/ubah/').$value->id_spp ?>" class="btn btn-xs btn-warning">Edit</a>
                                <a href="<?php echo base_url('spp/hapus/').$value->id_spp ?>" class="btn btn-xs btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                    </table>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
                              <div class="card-footer clearfix">
            <a href="<?php echo base_url('spp/pdf') ?>" class="btn btn-sm btn-warning"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;PDF</a>
        </div>        

        <div class="card-footer clearfix">
            <a href="<?php echo base_url('spp/tambah') ?>" class="btn btn-sm btn-warning"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Tambah Data</a>
        </div>        
        <div class="card-footer clearfix">
            <a href="<?php echo base_url('spp_laporan') ?>" class="btn-sm btn-warning"><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;&nbsp;Laporan</a>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
