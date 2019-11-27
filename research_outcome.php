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
                    Research Outcome
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Experience</li>
                    <li class="active">Research Outcome</li>
                </ol>
            </section>
            <section class="content">

                <div class="box">
                    <div class="box-header">
                        <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button></div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="vertical-align: middle;">No</th>
                                    <th rowspan="2" style="vertical-align: middle;">Output Penelitian dan PKM</th>
                                    <th rowspan="2" style="vertical-align: middle;">Tahun</th>
                                    <th rowspan="2" style="vertical-align: middle;">Keterangan</th>
                                    <th rowspan="2" style="vertical-align: middle;">File</th>
                                    <th rowspan="2" style="vertical-align: middle;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-left"> Program...</td>
                                    <td>2019</td>
                                    <td>Software ini..</td>
                                    <td width="5%">
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-info-circle"></i></button>
                                    </td>
                                    <td width="9%">
                                        <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i></button>
                                        <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-o"></i></button>
                                        <button class="btn btn-info btn-xs"><i class="fa fa-print"></i></button>
                                    </td>
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
                                        <label class="control-label" for="terapan">Output Penelitian</label>
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
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="control-label" for="terapan">Keterangan</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" id="terapan" rows="2"></textarea>
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
                                        <label class="control-label" for="terapan">Output Penelitian</label>
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
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label class="control-label" for="terapan">Keterangan</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" id="terapan" rows="2"></textarea>
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


    <?php include 'frame2.php';?>
</body>
<?php include 'footer.php';?>

</html>