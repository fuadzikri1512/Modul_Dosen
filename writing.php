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

                <div class="text-right">
                    <button type="button" class="btn btn-default">
                        <span class="glyphicon glyphicon-plus-sign"></span>
                    </button>
                </div>
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
                                <button class="btn btn-warning">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                                <button class="btn btn-success">Print</button>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
    <?php include 'frame2.php';?>
</body>
<?php include 'footer.php';?>

</html>