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
                    Data Aktivitas Dosen
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Aktivitas Dosen</li>
                </ol>
            </section>
            <section class="content">
                <div class="jumbotron bg-light-blue text-center">
                    <h2>DATA AKTIVITAS DOSEN</h2>
                </div>
            <form action="#" class="form-horizontal">
                <div class="form-group row">
                    <div class="col-lg-2">
                        <label class="control-label" for="terapan">Nama Dosen</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="terapan">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-2">
                        <label class="control-label" for="terapan">Jenis Kegiatan</label>
                    </div>
                    <div class="col-lg-10">
                        <textarea class="form-control" id="terapan" rows="2"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-2">
                        <label class="control-label" for="terapan">Tempat Kegiatan</label>
                    </div>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="terapan">
                    </div>
                </div>
                <div class="form-group row has-feedback">
                    <div class="col-lg-2">
                        <label for="tahun" class="control-label">Tahun</label>
                    </div>
                    <div class="col-lg-3">
                        <input type="date" id="tahun" class="form-control">
                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary">Kembali</button>
                    </div>
                    <div class="text-right col-xs-8">
                        <button type="submit" class="btn btn-danger">Tambahkan Data</button>
                        <button type="submit" class="btn btn-primary">Sunting Data</button>
                    </div>
                </div>
            </form>
            </section>
        </div>
    </div>
    <?php include 'frame2.php';?>
</body>
<?php include 'footer.php';?>

</html>