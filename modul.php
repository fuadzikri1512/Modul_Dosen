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
                    Modul Pembelajaran              
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Modul Pembelajaran</li>
                </ol>
            </section>

            <section class="content">
                <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button></div>
                <table class="table table-bordered col-lg-12">
                    <thead class="bg-aqua-gradient">
                        <tr>
                            <th>No</th>
                            <th>Nama Subject</th>
                            <th style="max-width: 102px">Jumlah Pertemuan</th>
                            <th style="max-width: 98px">Jumlah Mahasiswa</th>
                            <th>Tahun</th>
                            <th>Program Studi</th>
                            <th style="max-width: 50px">File Module</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Matematika Diskrit</td>
                            <td>15</td>
                            <td>13</td>
                            <td>2019</td>
                            <td>Ilmu Komputer</td>
                            <td class="text-center">
                                <button class="btn btn-primary">File</button>
                            </td>
                            <td class="text-center" style="max-width: 130px">
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
                            <h4 class="modal-title text-center">Modul Pembelajaran - Add</h4>
                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Nama Subject</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="dosen">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Jumlah Pertemuan</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="judul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Jumlah Mahasiswa</label>
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
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">File Modul</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control-file" id="modul">
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
                            <h4 class="modal-title text-center">Modul Pembelajaran - Edit</h4>
                        </div>

                        <!-- Modal Body -->
                        <div class="modal-body">
                            <form action="#" class="form-horizontal">
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Nama Subject</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="dosen">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Jumlah Pertemuan</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="judul">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">Jumlah Mahasiswa</label>
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
                                <div class="form-group row">
                                    <div class="col-lg-4">
                                        <label class="control-label" for="terapan">File Modul</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="file" class="form-control-file" id="modul">
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

            <!-- Modal Delete -->
            <div id="delete" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header bg-red">
                            <h4 class="modal-title text-center">Modul Pembelajaran - Delete</h4>
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