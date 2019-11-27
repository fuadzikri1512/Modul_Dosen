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
                    Writing
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Experience</li>
                    <li class="active">Writing</li>
                </ol>
            </section>
            <section class="content">

                <!--div class="text-right">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#save">
                        <span class="glyphicon glyphicon-plus-sign"></span>
                    </button>
                </div-->
                <div class="text-right"><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#save"><i class="fa fa-plus"></i></button></div>
                <table class="table table-bordered col-lg-12">
                    <thead class="bg-aqua-gradient">
                        <tr>
                            <th>No</th>
                            <th>Nama Dosen</th>
                            <th>Tulisan Ilmiah</th>
                            <th>Seminar</th>
                            <th>Jumlah Sitasi</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>Namaku dosen</th>
                            <th>Ilmiah banget</th>
                            <th>Terang sekali</th>
                            <th>Infinity</th>
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
                                        <label for="tulisan-ilmiah">Tulisan Ilmiah</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea name="tulisan-ilmi" id="hehe" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="seminar">Seminar</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea name="seminar" id="hehe" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-3">
                                        <label for="tahun" class="control-label">Tahun</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="date" id="tahun-awal" class="form-control">
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

            <!--Edit modal-->
            <div id="edit" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content tambahData-->
                    <div class="modal-content">
                        <div class="modal-header bg-yellow">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title text-center ">SUNTING DATA</h4>
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
                                        <label for="tulisan-ilmiah">Tulisan Ilmiah</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea name="tulisan-ilmi" id="hehe" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-3">
                                        <label for="seminar">Seminar</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea name="seminar" id="hehe" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row has-feedback">
                                    <div class="col-lg-3">
                                        <label for="tahun" class="control-label">Tahun</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <input type="date" id="tahun-awal" class="form-control">
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
        </div>
    </div>
    <?php include 'frame2.php';?>
</body>
<?php include 'footer.php';?>
</html>