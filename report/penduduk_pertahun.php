<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Penduduk Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                    <h2>Sistem Informasi Pelayanan Terpadu Kependuduk  </h2>
                        <h4>Jalan Cokroaminoto  No. 33, Kisaran, Sendang Sari <br> Kisaran Timur, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA KEPENDUDUKAN TAHUN   <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
                <tr>
									<th>No.</th><th width="18%">NIK Penduduk</th><th>Nama Penduduk</th><th width="14%"><center>No HP </center></th><th width="15%"><center>Tanggal</center></th><th width="15%"><center>Agama</center></th><th width="10%">Status</th><th><center>Keterangan</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM penduduk WHERE substr(tgl,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                <td><?= $nomor ?></td>
									<td><?= $data['nik'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['nohp'] ?> </td>
                                    <td><?= $data['tgl'] ?></td>
                                    <td><?= $data['agama'] ?></td>
									<td><?= $data['status'] ?></td>
									<td><?= $data['keterangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
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
