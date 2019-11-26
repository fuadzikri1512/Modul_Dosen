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
                    Pendidikan Dosen
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Pendidikan Dosen</li>
                </ol>
            </section>
            <section class="content">
                <div class="jumbotron bg-light-blue text-center">
                    <h2>DATA PENDIDIKAN DOSEN</h2>
                </div>
                <form action="#" class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Magister Terapan</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="terapan" placeholder="Computer Science">
                        
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Nama Perguruan Tinggi</label>
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
                    <div class="form-group row">
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary">Kembali</button>
                        </div>
                        <div class="text-right col-xs-8">
                            <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#sunting-pend-dosen" >Tambahkan Data</button>
                            <button type="submit" class="btn btn-primary">Sunting Data</button>
                        </div>
                    </div>
                </form>
                <div id="sunting-pend-dosen" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header bg-aqua-gradient text-center">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">SUNTING DATA PENDIDIKAN DOSEN</h4>
                            </div>
                            <div class="modal-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Magiste Terapan</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="terapan">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Nama Perguruan Tinggi</label>
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
                            <div class="modal-footer bg-aqua-gradient">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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