<!DOCTYPE html>
<html>
<?php include 'frame.php'; ?>


<body class="skin-blue">
    <?php include 'header.php';?>
    <div class="wrapper">
        <?php include 'navbar.php';?>
        <div class="content-wrapper">
            <section class="content-header">
               
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Speaker</li>
                </ol>
            </section>
            <section class="content">
                <div class="jumbotron bg-light-blue text-center">
                    <h2>DATA DOSEN SEBAGAI PEMBICARA</h2>
                </div>
                <form action="#" class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Nama Dosen</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="nama_dosen">
                        
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Bidan</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="Bidan">     
                        </div>
                    </div>

                    <div class="form-group row has-feedback">
                        <div class="col-lg-2">
                            <label for="tahun" class="control-label">Bukti Pendukung</label>
                        </div>
                        <div class="col-lg-2 custom-file">
                             <input type="file" class="custom-file-input" id="customFile">
                             <label class="custom-file-label" for="customFile">Unggah Berkas</label>
                            </div>
                            <div class="col-lg-8">
                                <label type="text" class="form-control" id="deks-berkas"></label>
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-2">
                            <label class="control-label" for="terapan">Alamat Surel</label>
                            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                 <label class="form-check-label" for="exampleRadios1"> Wilayah</label>                 
                    </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                 <label class="form-check-label" for="exampleRadios2"> Nasional </label>
                 </div>
                 <div class="form-check">
                     <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                        <label class="form-check-label" for="exampleRadios3"> Internasional </label>
                        </div>
    
                        </div>
                        <div class="col-lg-4">
                            
                            <input type="text" class="form-control" id="alamat_surel">
                        </div>
                        <div class="col-lg-4">
                            <label>Tahun</label>
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
             


    <?php include 'frame2.php';?>
</body>
<?php include 'footer.php';?>

</html>