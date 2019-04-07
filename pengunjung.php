<?php
include 'conn.php';?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/ico" href="icon.ico">
    <meta charset="UTF-8">
    <title>SLiBs</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Perpustakaan Berbasis Web">
    <meta name="keywords" content="Perpustakaan online, perpusdwsteam4n1babadan, online, website">
    <meta name="author" content="Addie's PC"/>
    <!-- bootstrap 3.6 -->
    <link href="admin/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />

            <link type="text/css" href="admin/images/icons/css/font-awesome.css" rel="stylesheet">
      </head>

      <body >
               <div class="jumbotron" style="background-image: url(latar.jpg); background-size: cover; background-attachment: fixed; background-position: center; min-height: 750px;">
    <div class="container-fluid"> <!-- Main content -->
                    <div class="row">
                    <div class="col-lg-12">
            <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<b>Selamat Datang di eLibrary UBSI DEWI SARTIKA by Kelompok 4 kelas 12.4D.31, Untuk Login Admin maupun Guru silahkan klik <a href="login_user.php">disini</a></b>
          </div>

                     
          <div class="col-md-4">
            <section style="background-color: rgba(255,255,255,0.90);" class="panel">
                <header class="panel-heading">
                    <b>Buku Pengunjung</b>
                </header>
                <?php 
                date_default_timezone_set('Asia/Jakarta');
                $jam = date("H:i:s");?>

                <div class="panel-body">
                    <div class="twt-area">
                        <form class="form-horizontal style-form" style="margin-top: 20px;" action="insert-pengunjung.php"  method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No. </label>
                              <div class="col-sm-10">
                                  <input name="id" type="text" id="id" class="form-control" placeholder="Tidak perlu di isi" autofocus="on" readonly="readonly" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input name="nama" type="text" id="nama" class="form-control" placeholder="Nama Anda" required />
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenkel</label>
                                  <div class="col-sm-6">
                                  <select class="form-control" name="jk" id="jk">
                                  <option> -- Pilih Salah Satu --</option>
                                  <option value="L"> Laki - Laki</option>
                                  <option value="P"> Perempuan</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Anggota</label>
                              <div class="col-sm-6">
                                  <select class="form-control" name="kelas" id="kelas">
                                  <option> -- Pilih Salah Satu --</option>
                                  <option value="Dosen"> Dosen</option>
                                  <option value="7A"> MI</option>
                                  <option value="7B"> SI</option>
                                  <option value="7C"> 7C</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Perlu</label>
                              <div class="col-sm-6">
                              <select class="form-control" name="perlu1" id="perlu1">
                                  <option> -- Pilih Salah Satu --</option>
                                  <option value="Meminjam"> Meminjam</option>
                                  <option value="Membaca"> Membaca</option>
                                  </select>
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Cari?</label>
                              <div class="col-sm-10">
                                  <input name="cari" type="text" id="cari" class="form-control" placeholder="Buku Apa yang Kamu Cari.?" required />
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Saran</label>
                              <div class="col-sm-10">
                                  <textarea rows="1.5" name="saran" id="saran" class="form-control" placeholder="Saran Anda untuk SLiBs" cols="25"></textarea>
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-10">
                                  <input name="tgl_kunjung" type="text" class="form-control" id="tgl_kunjung" value="<?php echo "".date("Y/m/d").""; ?>" readonly="readonly"/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jam</label>
                              <div class="col-sm-10">
                                  <input name="jam_kunjung" type="text" class="form-control" id="jam_kunjung" value="<?php echo "".date("H:i:s").""?>" readonly="readonly"/>
                              </div>
                          </div>
                          <div class="form-group" style="margin-bottom: 20px;">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-8">
                                  <input type="submit" value="Simpan" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                              </div>
                          </div>

                        </form>
                    </div>
                </div>
            </section>
        </div>



                         <div  class="col-md-8">
                            <section style="background-color: rgba(255,255,255,0.90);" class="panel">
                              <header class="panel-heading">
                                  <b>Data Pengunjung Hari Ini</b>
                            </header>
                            <div class="panel-body table-responsive">
                            <?php
                            date_default_timezone_set('Asia/Jakarta');
                    $tanggal = date("Y/m/d");
                    $jam=date("H:i:s");
                    $query1="select * from pengunjung where tgl_kunjung='$tanggal'";
                    $tampil=mysql_query($query1) or die(mysql_error());
                    ?>
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Tanggal</th>
                                        <th>Jam Berkunjung </th>
                                        <th>Keperluan</th>
                                  </tr>
                              </thead>
                              
                                 <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['tgl_kunjung'];?></td>
                    <td><?php echo $data['jam_kunjung'];?></td>
                    <td><?php echo $data['perlu1'];?></td>
                    <?php   
              } 
              ?>
              
                      </table><hr />
                    <?php $tampil=mysql_query("select * from pengunjung where tgl_kunjung='$tanggal'");
                          $user=mysql_num_rows($tampil);
                    ?>
                  <center><h4>Jumlah Pengunjung Hari Ini : <?php echo "$user"; ?> Orang </h4> </center>
                </div>
              </section>

                    
          </div><!--end col-6 -->
                  
<!-- Data Total Pengunjung -->                        
                        <div class="col-md-12">
                            <section style="background-color: rgba(255,255,255,0.90);" class="panel">
                              <header class="panel-heading">
                                <b>  Data Akumulasi Pengunjung</b>
                            </header>
                            <div class="panel-body table-responsive">
                            <?php
                    $query="select * from pengunjung order by id desc limit 10";
                    $tampil=mysql_query($query) or die(mysql_error());
                    ?>
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Anggota</th>
                                        <th>Tanggal</th>
                                        <th>Jam Berkunjung </th>
                                        <th>Keperluan</th>
                                        <th>Buku Yang di Cari</th>
                                  </tr>
                              </thead>
                              
                                 <?php while($data1=mysql_fetch_array($tampil))
                    { ?>
                    <tbody>
                    <tr>
                    <td><?php echo $data1['nama']; ?></td>
                    <td><?php echo $data1['jk']; ?></td>
                    <td><?php echo $data1['kelas'];?></td>
                    <td><?php echo $data1['tgl_kunjung'];?></td>
                    <td><?php echo $data1['jam_kunjung'];?></td>
                    <td><?php echo $data1['perlu1'];?></td>
                    <td><?php echo $data1['cari'];?></td>
                    <?php   
              } 
              ?>
              
                      </table><hr />
                  <?php $tampil1=mysql_query("select * from pengunjung order by id");
                        $user1=mysql_num_rows($tampil1);
                    ?>
                  <center><h4>Jumlah Total Pengunjung : <?php echo "$user1"; ?> Orang </h4> </center>
                  </div>
              </section>

                    
          </div>
          </div>
              <!-- row end -->
       
</body>
</html>