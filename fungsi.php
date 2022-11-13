<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <title>Cek Pembiayaan</title>
    <!-- Bagian css -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/pembiayaan.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
    <!-- Akhir dari Bagian css -->
    <!-- Bagian js -->
    <script src='assets/js/jquery-1.10.1.min.js'></script>       
    
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- akhir dari Bagian js -->
    
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
            Fitur Pengecekan Informasi Pembiayaan</a>
            <ul class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="true"></button>
            <div class="navbar-collapse collapse show">
            <ul class="nav navbar-nav navbar-left">
                <li class="clr1"><a href="index.php">Home</a></li>
                <li class="clr1"><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        </div>
    </div>
</div>
</br></br></br></br>

<!--- Bagian Judul-->   
<div class ="container">
    <div class="row">
            <div class="col-md-12">
            <h4>Hasil Data</h4>
            </div>
           
    </div>
</div>
<!--- Akhir Bagian Judul-->     
    
<!-- Bagian Searching -->
<div class ="container">
        <div class="row">
                <div class="col-md-6" style="padding-top:25px">
                            <?php
                                $nokontrak  = $_POST['inputnokontrak'];
                            
                                //Cek apakah inputan numerik dan 10 digit
                                if(is_numeric($nokontrak) && strlen($nokontrak)==10)  {
                            
                                    $sql ="Select * from toflmb WHERE ContractNumber= '".$nokontrak."'";
                                    $result = mysqli_query($koneksi, $sql);
                                    $row=mysqli_fetch_array($result);
                                    
                                    if (mysqli_num_rows($result) == 0)
                                    {
                                        echo "<h5>Data tidak ditemukan</h5>";
                                        echo "<br>";
                                    }
                                    else{
                                        echo "
                                        <table class='table table-bordered'>
                                            <thead>
                                            <tr style='background-color: rgba(0, 0, 0, 0.05);'>
                                                <th>ContractNumber</th>
                                                <th>CodeProduct</th>
                                                <th>AdditionalInfo</th> 
                                                <th>Name</th>
                                                <th>AccountsPayments</th>
                                                <th>InitialMargin</th>
                                                <th>InitialModal</th>
                                                <th>AkadNumber</th>
                                                <th>EffectiveDate</th>
                                                <th>ContractDate</th>
                                            </tr>
                                            </thead>";
                                
                                            
                                            echo "<tbody>";
                                            echo"<tr>";
                                            echo "<td>" . $row['ContractNumber'].   "</td>";
                                            echo "<td>" . $row['CodeProduct'].  "</td>";
                                            echo "<td>" . $row['AdditionalInfo'].   "</td>";
                                            echo "<td>" . $row['Name']. "</td>";
                                            echo "<td>" . $row['AccountsPayments']. "</td>";
                                            echo "<td>" . $row['InitialMargin'].        "</td>";
                                            echo "<td>" . $row['InitialModal']. "</td>";
                                            echo "<td>" . $row['AkadNumber'].   "</td>";
                                            echo "<td>" . $row['EffectiveDate'].    "</td>";
                                            echo "<td>" . $row['ContractDate']. "</td>";
                                            echo  "</tr>";
                                            echo "</tbody>";
                                        
                                            echo "</table> "; 
                                        }
                                    }
                                
                            
                                //cek inputan numerik dan digitnya tdk 10
                                else if (is_numeric($nokontrak) && strlen($nokontrak)!=10)
                                {
                                    echo"<h5>Nisn yang anda masukkan kurang dari 10 digit</h5>";
                                    echo"<br>";
                                }
                                else
                                {
                                    echo "<h5>Nilai harus numerik 0 s.d 9 tidak boleh mengadung karakter</h5>";
                                    echo "<br>";
                                }
                                mysqli_close($koneksi);
                            ?>

                </div>
        </div>
</div>

<!-- Akhir dari Searching -->
</body>
</html>