<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pengaduan Kependudukan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pengaduan WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                    <h2>Sistem Informasi Pelayanan Terpadu Kependuduk  </h2>
                        <h4>Jalan Cokroaminoto  No. 33, Kisaran, Sendang Sari <br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA Pengaduan Penduduk</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>NIK</td> <td><?= $data['nik'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pengadu</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td> <td><?= $data['tgl'] ?></td>
                                </tr>
                                <tr>
                                    <td>No Hp</td> <td><?= $data['nohp'] ?></td>
                                </tr>
								<tr>
                                    <td>Alamat</td> <td><?= $data['alamat'] ?> </td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td> <td><?= $data['keterangan'] ?> </td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                    Kisaran,  &SIPTK <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Kependudukan<strong></u><br>
                                        NIP.30220050
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
