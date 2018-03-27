<?php
// Create database connection using config file
include_once("config/config.php");

    // if(!isset($_SESSION["email_aja"]))
    // {
    //     header("Location:login.php");
    // }
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>tampil gaes</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
 
<body>
    <br>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th> <th>Email</th> <th>Nrp</th><th>Edit dan Delete</th>
                </tr>
            </thead>
            <tbody>
        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['nrp']."</td>"; 
             echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";    
          
        }
        ?>
            </tbody>
        </table>
    </div>
    <a href="logout.php">log out</a>
    
    
</body>
</html>