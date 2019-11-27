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
                    Data Pribadi Dosen
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Pribadi Dosen</li>
                </ol>
            </section>
            <section class="content">
                <div class="jumbotron bg-light-blue text-center">
                    <h2>DATA PRIBADI DOSEN</h2>
                </div>
                <form action="#" class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Nama Lengkap</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="terapan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Gelar</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="terapan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">NIDK</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="terapan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Alamat Surel</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="terapan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Nomor Handphone</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="terapan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Bidang Keahlian</label>
                        </div>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="1" id="textarea"></textarea>
                        </div>
                    </div>
                    <!-- <div class="form-group row text-right">
                        <div class="col-lg-12">
                            <button class="btn btn-primary" onclick="">Tambah</button>
                            <button class="btn btn-primary" onclick="">Kurang</butto>n
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Jabatan Akademik</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary">< Kembali</button>
                        </div>
                        <div class="col-lg-6 text-right">
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#suting">Sunting Data</button>
                        </div>
                    </div>
                </form>

                <div class="modal fade" id="suting">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header bg-yellow">
                                <h2 class="modal-title text-center">SUNTING DATA PRIBADI DOSEN</h2>
                            </div>

                            <!-- Modal Body -->
                            <div class="modal-body">
                                <form action="#" class="form-horizontal">
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Nama Lengkap</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="terapan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Gelar</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="terapan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">NIDK</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="terapan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Alamat Surel</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="terapan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Nomor Handphone</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="terapan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Bidang Keahlian</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" rows="1" id="textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col-lg-12">
                                            <button class="btn btn-warning" onclick="">
                                                <span class="glyphicon glyphicon-plus-sign"></span>
                                            </button>
                                            <button class="btn btn-warning" onclick="">
                                                <span class="glyphicon glyphicon-minus-sign"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-2">
                                            <label class="control-label" for="terapan">Jabatan Akademik</label>
                                        </div>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="">
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Modal Footer -->
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