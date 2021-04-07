<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
            <div class="card card-primary card-primary">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
                  <form class="form-horizontal" method="post" action="<?php echo base_url('siswa/simpan') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="NISN" placeholder="NISN" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="NIS" placeholder="NIS" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                            </div>
                              <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID Kelas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_kelas" placeholder="ID Kelas" required>
                            </div>
                              <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                            </div>
                              <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No Telp</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="no_telp" placeholder="No Telp" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-4">
                                <select class="form-control" style="width: 100%;" name="level" required>
                                <option value="0" selected>- Pilih -</option>
                                <option value="1">Administrator</option>
                                <option value="2">siswa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>