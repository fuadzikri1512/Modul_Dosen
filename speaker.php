<!DOCTYPE html>
<html>
<?php include 'frame.php'; ?>

<body class="skin-blue">
    <?php include 'header.php';?>
    <div class="wrapper">
        <?php include 'navbar.php';?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Data Dosen Sebagai Pembicara</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Speaker</li>
                </ol>
            </section>

            <section class="content">
                <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button></div>

                <table class="table table-bordered col-lg-12">
                    <thead class="bg-aqua-gradient">
                        <tr>
                            <th>No</th>
                            <th>Nama Dosen</th>
                            <th>Bidang</th>
                            <th>Bukti Pendukung</th>
                            <th>Alamat Surel</th>
                            <th>Tahun</th>
                            <th style="max-width: 30px">File</th>
                            <th style="max-width: 90px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Aku</td>
                            <td>komputer</td>
                            <td>sertifikat</td>
                            <td>wilayah</td>
                            <td>19/12/2019</td>
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

            <!-- Modal Create -->
            <div id="save" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header bg-green">
                            <h4 class="modal-title text-center">Data Dosen Sebagai Pembicara - Add</h4>
                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Nama Dosen</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="dosen">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Bidang</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="judul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Bukti Pendukung</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="file" class="form-control" id="bukti-pendukung">
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="deksripsi-file" placeholder="deskripsi berkas">
                                    </div>
                                </div>
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Alamat Surel</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="radio" name="area" value="Wilayah"> Wilayah<br>
                                        <input type="radio" name="area" value="Nasional"> Nasional<br>
                                        <input type="radio" name="area" value="Internasional"> Internasional
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="date" id="tahun" class="form-control">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn" data-dismiss="modal">Batalkan</button>
                                    <button type="submit" class="btn btn-success">Tambahkan Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Edit -->
            <div id="edit" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header bg-yellow">
                            <h4 class="modal-title text-center">Data Dosen Sebagai Pembicara - Edit</h4>
                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Nama Dosen</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="dosen">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Bidang</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="judul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Bukti Pendukung</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="file" class="form-control" id="bukti-pendukung">
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="deksripsi-file" placeholder="deskripsi berkas">
                                    </div>
                                </div>
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Alamat Surel</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="radio" name="area" value="Wilayah"> Wilayah<br>
                                        <input type="radio" name="area" value="Nasional"> Nasional<br>
                                        <input type="radio" name="area" value="Internasional"> Internasional
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="date" id="tahun" class="form-control">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn" data-dismiss="modal">Batalkan</button>
                                    <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Delete -->
            <div id="delete" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header bg-red">
                            <h4 class="modal-title text-center">Data Dosen Sebagai Pembicara - Delete</h4>
                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <p>Anda yakin ingin menghapus data ini?</p>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-danger">Iya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <?php include 'frame2.php';?>
</body>
<?php include 'footer.php';?>

</html>