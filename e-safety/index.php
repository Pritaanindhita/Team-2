<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<title>E-Safety</title>
    <link rel="icon" type="image/x-icon" href="assets/logo_safety.png">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

	<!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@500;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-nav">
                <div class="sidebar-brand mb-5">
                    <div class="brand">
                        <a href="#">
                            <img src="assets/logo_safety.png"> E-Safety
                            <a href="#menu-toggle" class="btn btn-default menu-toggle" id="menu-toggle"><i class="fas fa-bars"></i></a>
                        </a>
                    </div>
                </div>
                <div class="menu">
                    <div class="item">
                        <a href="#"><img src="assets/dash_icon.png" class="mr-3">Dashboard</a>
                    </div>
                    <div class="item">
                        <a class="sub-btn"><img src="assets/inspeksi_icon.png" class="mr-3">Inspeksi<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                          <a href="#" class="sub-item">Inspeksi APD</a>
                          <a href="#" class="sub-item">Inspeksi APAR</a>
                          <a href="#" class="sub-item">Inspeksi Hydrant</a>
                        </div>
                    </div>
                    <div class="item">
                        <a href="#"><img src="assets/pekerja_icon.png" class="mr-3">Data Pekerja</a>
                    </div>
                    <div class="item">
                        <a class="sub-btn"><img src="assets/laporan_icon.png" class="mr-3">Laporan<i class="fas fa-angle-right dropdown"></i></a>
                        <div class="sub-menu">
                          <a href="#" class="sub-item">Laporan APD</a>
                          <a href="#" class="sub-item">Laporan APAR</a>
                          <a href="#" class="sub-item">Laporan Hydrant</a>
                        </div>
                    </div>
                </div>
                <div class="gambar">
                    <img src="assets/nav.png">
                </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <?php include "headerbar.inc"?>
                <?php include "data_pekerja.inc"  ?>
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script>
    	$("#menu-toggle").click(function(e) {
		  e.preventDefault();
		  $("#wrapper").toggleClass("toggled");
		});
        $("#menu-2").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
        $(".sub-btn").click(function(){
            $(this).next(".sub-menu").slideToggle();
            $(this).find(".dropdown").toggleClass('rotate');
        });
    </script>
</body>
</html>