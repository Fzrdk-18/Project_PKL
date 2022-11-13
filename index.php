<?php 
include 'koneksi.php'; session_start(); 
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Z">
    <title>Sistem Infromasi Pembiayaan Rekening</title>
    <!-- Bagian css -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/pembiayaan.css">
    <!-- <link rel="stylesheet" href="assests/css/pembiayaan.css"> -->
    <!--<link rel='stylesheet' href='assets/css/jquery-ui-custom.css'>-->
    
    <link rel="stylesheet" href="assets/css/fontawesome.min.css"> 
    <!-- Akhir dari Bagian css -->
    <!-- Bagian js -->
    <script src='assets/js/jquery-1.10.1.min.js'></script>       
    
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- akhir dari Bagian js -->

    <link rel="stylesheet" href="assets/css/search.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</head>

<body>	
	<a href="logout.php" style="font-size: 14px;padding-left: 15px;padding-top: 15px;color: white;" title="Log Out">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>
	</a>
	<div class="as">
		<section id="contact" class="clean-block features ">
            <div class="container">
                <div class="content">
                    <div class="right-side">
                        <h2 class="fw-bold">PENGECEKAN INFORMASI PEMBIAYAAN</h2>
                        <hr>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputnokontrak" name="inputnokontrak" min="10" maxlength="10" placeholder="Masukan Nomer Kontrak">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-actions mt-2" style="text-align: right;">
                                <button type="submit" id="submit" class="btn btn-primary" name="submit" style="color: #141619;">Search</button>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="data"></div>

    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.data').load("data.php");
            $("#submit").click(function() {
                var inputnokontraks = $("#inputnokontrak").val();
                $.ajax({
                    type: 'POST',
                    url: "data.php",
                    data: {
                        inputnokontrak: inputnokontraks
                    },
                    success: function(hasil) {
                        $('.data').html(hasil);
                    }
                });
            });
            $('#example').DataTable();
        });
    </script>

    
</body>


</html>

