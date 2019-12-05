<!DOCTYPE html>
<html>
<?php include 'frame.php'; ?>

<body class="skin-blue">
    <?php include 'header.php';?>
    <div class="wrapper">
        <?php include 'navbar.php';?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Data Aktivitas Dosen
                </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Data Aktivitas Dosen</li>
            </ol>
        </section>
        
        <section class="content">    
            <div class="box">
                <div class="box-header">
                    <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button></div>
                </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead class="bg-aqua-gradient">
                                <tr>
                                    <th rowspan="2" style="vertical-align: middle;">No</th>
                                    <th rowspan="2" style="vertical-align: middle;">Nama Dosen</th>
                                    <th rowspan="2" style="vertical-align: middle;">Jenis Kegitatan</th>
                                    <th rowspan="2" style="vertical-align: middle;">Tempat Kegiatan</th>
                                    <th rowspan="2" style="vertical-align: middle;">Tahun</th>
                                    <th rowspan="2" style="vertical-align: middle;">File</th>
                                    <th rowspan="2" style="vertical-align: middle;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-left"> Ahli Jati</td>
                                    <td>Workshop </td>
                                    <td>Iheskuy</td>
                                    <td>2019</td>
                                    <th class="text-center" style="max-width: 50px">
                                        <button class="btn btn-primary">Info</button>
                                    </th>
                                    <th class="text-center" style="max-width: 120px">
                                        <button class="btn btn-warning" data-toggle="modal" data-target="#edit">Edit</button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                                        <button class="btn btn-success">Print</button>
                                    </th>
                                </tr>  
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </section>

            <div id="save" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content tambahData-->
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-center ">INSERT/ADD</h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="control-label" for="terapan">Nama Dosen</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="terapan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="control-label" for="terapan">Jenis Kegiatan</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" id="terapan" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="control-label" for="terapan">Tempat Kegiatan</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="terapan">
                                    </div>
                                </div>
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-3">
                                        <label for="tahun" class="control-label">Tahun</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="date" id="tahun" class="form-control">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn" data-dismiss="modal">Batalkan</button>
                                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#suting">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="edit" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content tambahData-->
                    <div class="modal-content">
                        <div class="modal-header bg-yellow">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-center ">EDIT</h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">
                            <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="control-label" for="terapan">Nama Dosen</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="terapan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="control-label" for="terapan">Jenis Kegiatan</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" id="terapan" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="control-label" for="terapan">Tempat Kegiatan</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" id="terapan">
                                    </div>
                                </div>
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-3">
                                        <label for="tahun" class="control-label">Tahun</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="date" id="tahun" class="form-control">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn" data-dismiss="modal">Batalkan</button>
                                    <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#suting">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

            <div div class="modal fade" id="delete">
              <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header bg-red">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Delete Data</h4>
                      </div>
                        <form action="#">
                          <input name="id" type="hidden" value="">
                          <div class="modal-body">
                              <p>Apakah anda yakin menghapus data ini?</p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </div>
                        </form>
                    </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.example-modal -->
        </div>
    </div>
 
            <!-- <form action="#" class="form-horizontal">
                <div class="form-group row">
                    <div class="col-lg-2">
                        <label class="control-label" for="terapan">Nama Dosen</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="terapan">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-2">
                        <label class="control-label" for="terapan">Jenis Kegiatan</label>
                    </div>
                    <div class="col-lg-10">
                        <textarea class="form-control" id="terapan" rows="2"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-2">
                        <label class="control-label" for="terapan">Tempat Kegiatan</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="terapan">
                    </div>
                </div>
                <div class="form-group row has-feedback">
                    <div class="col-lg-2">
                        <label for="tahun" class="control-label">Tahun</label>
                    </div>
                    <div class="col-lg-3">
                        <input type="date" id="tahun" class="form-control">
                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary">Kembali</button>
                    </div>
                    <div class="text-right col-xs-8">
                        <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#tambah-aktivitas-dosen">Tambahkan Data</button>
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#sunting-aktivitas-dosen">Sunting Data</button>
                    </div>
                </div>
            </form>
            <div id="tambah-aktivitas-dosen" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                    Modal content tambahData
                        <div class="modal-content">
                            <div class="modal-header bg-green">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-center ">TAMBAH DATA</h4>
                            </div>
                            <div class="modal-body">
                            <form action="#" class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="control-label" for="terapan">Nama Dosen</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="terapan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="control-label" for="terapan">Jenis Kegiatan</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" id="terapan" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="control-label" for="terapan">Tempat Kegiatan</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="terapan">
                                        </div>
                                    </div>
                                    <div class="form-group row has-feedback">
                                        <div class="col-lg-3">
                                            <label for="tahun" class="control-label">Tahun</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="date" id="tahun" class="form-control">
                                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                        </div>
                                    </div>
                            </form>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group row">
                                    <div class="col-lg-12 text-right">
                                        <button type="submit" class="btn" data-dismiss="modal">Batalkan</button>
                                        <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#suting">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> 
           suntingdata-modal
            <div id="sunting-aktivitas-dosen" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                     Modal content
                        <div class="modal-content">
                            <div class="modal-header bg-yellow">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title text-center ">SUNTING DATA AKTIVITAS DOSEN</h4>
                            </div>
                            <div class="modal-body">
                            <form action="#" class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="control-label" for="terapan">Nama Dosen</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="terapan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="control-label" for="terapan">Jenis Kegiatan</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" id="terapan" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-3">
                                            <label class="control-label" for="terapan">Tempat Kegiatan</label>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" id="terapan">
                                        </div>
                                    </div>
                                    <div class="form-group row has-feedback">
                                        <div class="col-lg-3">
                                            <label for="tahun" class="control-label">Tahun</label>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="date" id="tahun" class="form-control">
                                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                        </div>
                                    </div>
                            </form>
                            </div>
                            <div class="modal-footer">
                                <div class="form-group row">
                                    <div class="col-lg-12 text-right">
                                        <button type="submit" class="btn" data-dismiss="modal">Batalkan</button>
                                        <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#suting">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> 
        </section>
    </div>
</div>
    <?php include 'frame2.php';?>
</body>
<?php include 'footer.php';?>

</html>