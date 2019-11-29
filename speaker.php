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
                    Speaker                         
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Speaker</li>
                </ol>
            </section>

            <section class="content">
                <button type="button" class="btn btn-facebook" style="float:right; margin: 10px 10px 0 0">
                    <span class="glyphicon glyphicon-print"></span>
                </button>
                <div class="jumbotron bg-light-blue text-center" style="border-radius: 1rem">
                    <h2>DATA DOSEN SEBAGAI PEMBICARA</h2>
                </div>

                <form action="#" class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Nama Dosen </label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="terapan">             
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Bidang</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="perguruan-tinggi">                 
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Bukti Pendukung</label>
                        </div>
                        <div class="col-lg-2">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="deskripsi">
                        </div>
                    </div>

                    <div class="form-group row has-feedback">
                        <div class="col-lg-2 col-xs-12">
                            <label for="" class="control-label">Alamat Surel</label>
                        </div>
                        <div class="col-lg-2 col-xs-5">
                            <input type="radio" name="wilayah" value="wilayah"> Wilayah <br>
                            <input type="radio" name="wilayah" value="nasional"> Nasional <br>
                            <input type="radio" name="wilayah" value="internasional"> Internasional
                        </div>
                        <div class="col-lg-8 col-xs-2">
                            <label for="tahun" class="control-label">Tahun</label><br>
                            <input type="date" id="tahun-awal" class="">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-4">
                            
                            <button type="submit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                Kembali
                            </button>
                        </div>
                        <div class="text-right col-xs-8">
                            <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#tambah-pembicara">Tambahkan Data</button>
                            <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#sunting-pembicara">Sunting Data</button>
                        </div>
                    </div>
                </form>

                <!-- Modal Sunting  -->
                <div id="sunting-pembicara" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header bg-yellow text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title">SUNTING DATA DOSEN SEBAGAI PEMBICARA</h4>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Nama Dosen </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="terapan">             
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Bidang</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="perguruan-tinggi">                 
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Bukti Pendukung</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="deskripsi">
                                        </div>
                                    </div>

                                    <div class="form-group row has-feedback">
                                        <div class="col-lg-2 col-xs-12">
                                            <label for="" class="control-label">Alamat Surel</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-5">
                                            <input type="radio" name="wilayah" value="wilayah"> Wilayah <br>
                                            <input type="radio" name="wilayah" value="nasional"> Nasional <br>
                                            <input type="radio" name="wilayah" value="internasional"> Internasional
                                        </div>
                                        <div class="col-lg-8 col-xs-2">
                                            <label for="tahun" class="control-label">Tahun</label><br>
                                            <input type="date" id="tahun-awal" class="">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn" data-dismiss="modal">Batalkan</button>
                                <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Tambah  -->
                <div id="tambah-pembicara" class="modal fade" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header bg-green text-center">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title">TAMBAHKAN DATA DOSEN SEBAGAI PEMBICARA</h4>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Nama Dosen </label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="terapan">             
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Bidang</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="perguruan-tinggi">                 
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Bukti Pendukung</label>
                                        </div>
                                        <div class="col-lg-4">
                                            <label for="exampleFormControlFile1">Example file input</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="deskripsi">
                                        </div>
                                    </div>

                                    <div class="form-group row has-feedback">
                                        <div class="col-lg-2 col-xs-12">
                                            <label for="" class="control-label">Alamat Surel</label>
                                        </div>
                                        <div class="col-lg-2 col-xs-5">
                                            <input type="radio" name="wilayah" value="wilayah"> Wilayah <br>
                                            <input type="radio" name="wilayah" value="nasional"> Nasional <br>
                                            <input type="radio" name="wilayah" value="internasional"> Internasional
                                        </div>
                                        <div class="col-lg-8 col-xs-2">
                                            <label for="tahun" class="control-label">Tahun</label><br>
                                            <input type="date" id="tahun-awal" class="">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Modal Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn" data-dismiss="modal">Batalkan</button>
                                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
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