<?php
    include "koneksi.php";

    if (isset($_POST['inputnokontrak'])) {
        $nokontrak  = $_POST['inputnokontrak'];


        //Cek apakah inputan numerik dan 10 digit
        if(is_numeric($nokontrak) && strlen($nokontrak)==10)  {
    
            $sql ="Select * from toflmb WHERE ContractNumber= '".$nokontrak."'";
            $result = mysqli_query($koneksi, $sql);
            $row=mysqli_fetch_array($result);
            
            if (mysqli_num_rows($result) == 0)
            {
                echo "<div style='text-align: center;' class='mt-5'>";
                echo "<h5 style='color: white;'>Data tidak ditemukan</h5>";
                echo "<br>";
                echo "</div>";
            }
            else{
                echo "
                <div class='card mt-5'>
                <div class='card-body'>
                <table  id='example' class='display table-responsive table' style='width:100%; font-size: 12px;'>
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
                    echo "</div> "; 
                    echo "</div> "; 
                }
            }
        
    
        //cek inputan numerik dan digitnya tdk 10
        else if (is_numeric($nokontrak) && strlen($nokontrak)!=10)
        {
            echo "<div style='text-align: center;' class='mt-5'>";
            echo"<h5 style='color:white;'>Nomor Kontrak yang anda masukkan kurang dari 10 digit</h5>";
            echo "<br>";
            echo "</div>";
        }
        else
        {
            echo "<div style='text-align: center;' class='mt-5'>";
            echo "<h5 style='color:white;'>Nilai harus numerik 0 s.d 9 tidak boleh mengadung karakter</h5>";
            echo "<br>";
            echo "</div>";
        }
        mysqli_close($koneksi);
    }

    
?>