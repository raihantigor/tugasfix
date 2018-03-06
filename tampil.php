<?php
// Create database connection using config file
include_once("config/config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>tampil gaes</title>
</head>
 
<body>

 
    <table width='80%' border=1>
 
    <tr>
        <th>Name</th> <th>Mobile</th> <th>Email</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['nama']."</td>";    
      
    }
    ?>
    </table>
</body>
</html>