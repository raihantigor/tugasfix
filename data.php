<?php session_start(); ?>

<?php
// Create database connection using config file
include_once("config/config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM kendaraan ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>tampil gaes</title>
    <!-- Bootstrap core CSS -->
</head>
 
<body>
    <br>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Hari</th> <th>Mobil</th> <th>Motor</th> <th>Jalan</th>
                </tr>
            </thead>
            <tbody>
        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['id']."</td>";
            echo "<td>".$user_data['mobil']."</td>";
            echo "<td>".$user_data['motor']."</td>";
            echo "<td>".$user_data['jalan']."</td>"; 

          
        }
        ?>
            </tbody>
        </table>

    </div>
    
    
</body>
</html>