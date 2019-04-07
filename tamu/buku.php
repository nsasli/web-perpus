
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" >
        <title>Katalog Buku</title>
        <!-- css table datatables/dataTables -->
	<link rel="stylesheet" href="datatables/dataTables.bootstrap.css"/>
            <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

    </head>
<body>
<!-- Penambahan Navigasi Bar Atas belum-->


           <center><div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content">
                            <?php
             if(isset($_GET['hal']) == 'hapus'){
				$kd_dept = $_GET['kd'];
				$cek = mysqli_query($koneksi, "SELECT * FROM tbl_buku WHERE id='$kd_dept'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';

				}else{
					$delete = mysqli_query($koneksi, "DELETE FROM tbl_buku WHERE id='$kd_dept'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
					}
				}
			}
			?>

                                  <div style="background-color: rgba(255,255,255,0.90);" class="panel panel-default">
                        <div class="panel-heading">

                       
                        <h3 class="panel-title"><i class="icon-book"></i> Katalog Buku</h3> 
                        </div>
                        <div class="panel-body table-responsive">
                                    <table id="lookup" class="table table-bordered table-hover" >  
	                                   <thead bgcolor="#eeeeee" align="center">
                                        <tr>
	  
                                        <th>Id</th>
	                                    <th width="30%">Judul </th>
                                        <th>Pengarang</th>
                                        <th>Penerbit</th>
	                                    <th width="13%">ISBN</th>
                                        <th width="5%">Jumlah </th>
                                        <th width="6%">Lokasi</th>
	  
                                       </tr>
                                      </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                 
                                </div>
                            </div>
                            
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div></center>
            <!--/.container-->
        
        <!--/.wrapper--><br />
        <div class="footer span-12">
            <div class="container">
              <center> <b class="copyright"><a href=""> perpusdwsteam4</a> by kelompok 4 kelas 12.4D.31 </b></center>
            </div>
        </div>
        
        <script src="datatables/jquery.dataTables.js"></script>
        <script src="datatables/dataTables.bootstrap.js"></script>
        <script>
        $(document).ready(function() {
				var dataTable = $('#lookup').DataTable( {
					"processing": true,
					"serverSide": true,
					"ajax":{
						url :"ajax-data-buku.php", // json datasource
						type: "post",  // method  , by default get
						error: function(){  // error handling
							$(".lookup-error").html("");
							$("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
							$("#lookup_processing").css("display","none");
							
						}
					}
				} );
			} );
        </script>
        
      
    </body>
    </html>
