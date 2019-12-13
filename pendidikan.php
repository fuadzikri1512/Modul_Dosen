<!DOCTYPE html>
<html>
<?php include 'frame.php'; ?>
<?php include 'config/pendidikan.php';
                $db         = new pendidikan();
                $table      = 'pendidikan';
?>
<body class="skin-blue">
    <?php include 'header.php';?>
    <div class="wrapper">
        <?php include 'navbar.php';?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Pendidikan Dosen
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Pendidikan Dosen</li>
                </ol>
            </section>
            <section class="content">
                <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button></div>
                <table class="table table-bordered col-lg-12">
                    <thead class="bg-aqua-gradient">
                        <tr>
                            <th>No</th>
                            <th>Magister Terapan</th>
                            <th>Nama Perguruan Tinggi</th>
                            <th>Tahun Mulai</th>
                            <th>Tahun Akhir</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Komputer Modern</td>
                            <td>Gedung 27 lantai</td>
                            <td>1908</td>
                            <td>1945</td>
                            <td class="text-center" style="width: 70px">
                                <button class="btn btn-primary">Info</button>
                            </td>
                            <td class="text-center" style="width: 200px">
                                <button class="btn btn-warning" data-toggle="modal" data-target="#edit">Edit</button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                                <button class="btn btn-success">Print</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!--Edit Modal-->
            <div id="edit" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header bg-yellow text-center">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">SUNTING DATA PENDIDIKAN DOSEN</h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label class="control-label" for="terapan">Magister Terapan</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="terapan">
                                    
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label class="control-label" for="terapan">Perguruan Tinggi</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="perguruan-tinggi">
                                    
                                    </div>
                                </div>
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-2 col-xs-12">
                                        <label for="tahun" class="control-label">Tahun</label>
                                    </div>
                                    <div class="col-lg-3 col-xs-5">
                                        <input type="date" id="tahun-awal" class="form-control">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                    <div class="col-lg-1 col-xs-2">
                                        <label for="" class="control-label">sampai</label>
                                    </div>
                                    <div class="col-lg-3 col-xs-5">
                                        <input type="date" id="tahun-akhir" class="form-control">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                </div>
                                <!--div class="form-group row">
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary">Kembali</button>
                                    </div>
                                    <div class="text-right col-xs-8">
                                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#sunting-pend-dosen" >Tambahkan Data</button>
                                        <button type="submit" class="btn btn-primary">Sunting Data</button>
                                    </div>
                                </div-->
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Batalkan</button>
                            <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Add Modal-->
            <div id="save" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header bg-green text-center">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">INSERT/ADD PENDIDIKAN DOSEN</h4>
                        </div>
                        <form action="action.php?table=<?php echo $table; ?>&action=store" method="post">
                        <div class="modal-body">
                            
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label class="control-label" for="terapan">Tingkat pendidikan</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="terapan" name="tingkat_pendidikan">
                                    
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label class="control-label" for="terapan">Perguruan Tinggi</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="perguruan-tinggi" name="nama_pt">
                                    
                                    </div>
                                </div>
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-2 col-xs-12">
                                        <label for="tahun" class="control-label">Tahun</label>
                                    </div>
                                    <div class="col-lg-3 col-xs-5">
                                        <input type="date" id="tahun-awal" class="form-control" name="tahun_masuk">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                    <div class="col-lg-1 col-xs-2">
                                        <label for="" class="control-label">sampai</label>
                                    </div>
                                    <div class="col-lg-3 col-xs-5">
                                        <input type="date" id="tahun-akhir" class="form-control" name="tahun_selesai">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                </div>
                                <!--div class="form-group row">
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary">Kembali</button>
                                    </div>
                                    <div class="text-right col-xs-8">
                                        <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#sunting-pend-dosen" >Tambahkan Data</button>
                                        <button type="submit" class="btn btn-primary">Sunting Data</button>
                                    </div>
                                </div-->
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-dismiss="modal">Batalkan</button>
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Delete modal-->
            <div class="modal fade" id="delete">
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