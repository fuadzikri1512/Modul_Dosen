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
                        <div class="col-lg-2">
                            <label for="tahun" class="control-label">Tahun</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="date" id="tahun-awal" class="form-control">
                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                        </div>
                        <div class="col-lg-1">
                            <label for="" class="control-label">sampai</label>
                        </div>
                        <div class="col-lg-3">
                            <input type="date" id="tahun-akhir" class="form-control">
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