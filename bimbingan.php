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
                    Bimbingan Skripsi              
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Bimbingan Skripsi</li>
                </ol>
            </section>
            <section class="content">
                <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button></div>
                    <table class="table table-bordered col-lg-12">
                        <thead class="bg-aqua-gradient">
                            <tr>
                                <th>No</th>
                                <th>Nama Dosen</th>
                                <th>Judul Tugas Akhir</th>
                                <th>Nama Mahasiswa</th>
                                <th>Tahun</th>
                                <th>Program Studi</th>
                                <th>File</th>
                                <th>Action</th>
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
                                <td class="text-center" style="max-width: 30px">
                                    <button class="btn btn-primary">Info</button>
                                </td>
                                <td class="text-center" style="max-width: 90px">
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#edit">Edit</button>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete">Delete</button>
                                    <button class="btn btn-success">Print</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!--Delete modal-->
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

            <!--Save Modal-->
            <div id="save" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                <!-- Modal content tambahData-->
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-center ">INSERT/ADD</h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-2">
                                        <label class="control-label" for="terapan">Nama Dosen</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="nama-dosen-add">
                                    </div>
                                    <div class="col-lg-2 text-right">
                                        <label for="tahun" class="control-label">Tahun</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" min="2013" placeholder="2025" id="tahun-add" class="form-control">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label for="judul">Judul</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="judul-add">
                                    </div>
                                    <div class="col-lg-2 text-right">
                                        <label for="prodi-add">Program Studi</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <select name="prodi-add" id="prodi-add" class="form-control">
                                            <option value="cs1">Computer Science 1</option>
                                            <option value="cs2">Computer Science 2</option>
                                            <option value="cs3">Computer Science 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label for="nama-mhs-add">Nama Mahasiswa</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="nama-mhs-add">
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

            <!--Edit Modal-->
            <div id="edit" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                <!-- Modal content tambahData-->
                    <div class="modal-content">
                        <div class="modal-header bg-yellow">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-center ">SUNTING DATA</h4>
                        </div>
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-2">
                                        <label class="control-label" for="terapan">Nama Dosen</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="nama-dosen-edit">
                                    </div>
                                    <div class="col-lg-2 text-right">
                                        <label for="tahun" class="control-label">Tahun</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" min="2013" placeholder="2025" id="tahun-edit" class="form-control">
                                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label for="judul">Judul</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="judul-edit">
                                    </div>
                                    <div class="col-lg-2 text-right">
                                        <label for="prodi-edit">Program Studi</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <select name="prodi-edit" id="prodi-edit" class="form-control">
                                            <option value="cs1">Computer Science 1</option>
                                            <option value="cs2">Computer Science 2</option>
                                            <option value="cs3">Computer Science 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2">
                                        <label for="nama-mhs-edit">Nama Mahasiswa</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="text" class="form-control" id="nama-mhs-edit">
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
        </div>
    </div>
    <?php include 'frame2.php';?>
</body>
<?php include 'footer.php';?>

</html>