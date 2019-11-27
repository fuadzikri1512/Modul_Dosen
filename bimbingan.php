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
        </div>
    </div>
    <?php include 'frame2.php';?>
</body>
<?php include 'footer.php';?>

</html>