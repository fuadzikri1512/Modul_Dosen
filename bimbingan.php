<!DOCTYPE html>
<html>
<?php include 'frame.php'; ?>
<?php include '../../config/kelola-data/kurikulum.php';
                $db         = new bimbingan();
                $table      = 'bimbingan_skripsi';
?>
<body class="skin-blue">
    <?php include 'header.php';?>
    <div class="wrapper">
        <?php include 'navbar.php';?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Bimbingan Skripsi              
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Bimbingan Skripsi</li>
                </ol>
            </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button></div>
            </div>
                <div class="box-body">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="bg-aqua-gradient">
                            <tr>
                                <th>No</th>
                                <th>Nama Dosen</th>
                                <th>Judul Tugas Akhir</th>
                                <th>Nama Mahasiswa</th>
                                <th>Tahun</th>
                                <th>Program Studi</th>
                                <th style="max-width: 30px">File</th>
                                <th style="max-width: 90px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Namaku dosen</td>
                                <td>Kuakhiri dengan Hamdalah</td>
                                <td>Senang</td>
                                <td>1945</td>
                                <td>Comp Sains</td>
                                <td class="text-center" style="max-width: 70px">
                                <button class="btn btn-primary">Info</button></td>

                                <td class="text-center" style="width: 200px">
                                <button class="btn btn-warning" data-toggle="modal" data-target="#edit">Edit</button>
                                <button class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                                <button class="btn btn-success">Print</button>
                                </td>
                            </tr>
                        </tbody>
                </table> 
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </section>

            <!-- Modal Create -->
            <div id="save" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header bg-green">
                            <h4 class="modal-title text-center">Bimbingan Skripsi - Add</h4>
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
                                        <label class="control-label" for="terapan">Judul</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="judul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Nama Mahasiswa</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="mahasiswa">
                                    </div>
                                </div>
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Tahun</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="number" min="2013" id="tahun" class="form-control">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Program Studi</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="studi">
                                            <option value="bm">Business Management</option>
                                            <option value="bis">Business Information System</option>
                                            <option value="cs">Computer Science</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn" data-dismiss="modal">Batalkan</button>
                                    <button type="submit" class="btn btn-success">Simpan</button>
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
                            <h4 class="modal-title text-center">Bimbingan Skripsi - Edit</h4>
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
                                        <label class="control-label" for="terapan">Judul</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="judul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Nama Mahasiswa</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="mahasiswa">
                                    </div>
                                </div>
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Tahun</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="number" min="2013" id="tahun" class="form-control">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Program Studi</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <select id="studi">
                                            <option value="bm">Business Management</option>
                                            <option value="bis">Business Information System</option>
                                            <option value="cs">Computer Science</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <div class="form-group row">
                                <div class="col-lg-12 text-right">
                                    <button type="submit" class="btn" data-dismiss="modal">Batalkan</button>
                                    <button type="submit" class="btn btn-warning">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="delete" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header bg-red">
                            <h4 class="modal-title text-center">Bimbingan Skripsi - Delete</h4>
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