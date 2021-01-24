<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pengaduan Kependudukan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                   
                    <form class="form-horizontal" action="" method="post"> 
						<div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" value="<?=$data['nik']?>"class="form-control" id="inputEmail3" placeholder="NIP Dokter">
                            </div>
                        </div>
                         <!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                         <div class="form-group">


                    <label class="col-sm-3 control-label">Tanggal </label>
                    <!--untu tahun-->
                    <div class="col-sm-2 col-xs-9">
                        <select name="tahun" class="form-control">
                            <?php for($i=2020;$i>1980;$i--) {?>
                            <option value="<?=$i?>"> <?=$i?> </option>
                            <?php }?>
                            
                        </select>

                    </div>
                    <!--Untuk Bulan-->
                    <div class="col-sm-2 col-xs-9">
                        <select name="bulan" class="form-control">
                            <?php 
                            $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                            for($j=12;$j>0;$j--) {?>
                            <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                            <?php }?>
                            
                        </select>

                    </div>
                    <!--Untuk Tanggal-->
                    <div class="col-sm-2 col-xs-9">
                        <select name="tanggal" class="form-control">
                            <?php for($k=31;$k>0;$k--) {?>
                            <option value="<?=$k?>"> <?=$k?> </option>
                            <?php }?>
                            
                        </select>

                    </div>

                    </div>
                    <!--end tanggal lahir-->           
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Pengadu</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Dokter">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="nohp" class="col-sm-3 control-label"> No HP</label>
                            <div class="col-sm-9">
                                <input type="text" name="nohp" value="<?=$data['nohp']?>"class="form-control" id="inputEmail3" placeholder="NO HP">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label"> Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat">
                            </div>
                        </div>

                    
                        <div class="form-group">
                            <label for="keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="keterangan" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pengaduan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pengaduan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pengaduan Kependudukan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nik=$_POST['nik'];
    $tgl=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tanggal'];
    $nama=$_POST['nama'];
    $nohp=$_POST['nohp'];
    $alamat=$_POST['alamat'];
	$keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE pengaduan SET nik='$nik',tgl='$tgl',nama='$nama',
	nohp='$nohp',alamat='$alamat',keterangan='$keterangan' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengaduan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



