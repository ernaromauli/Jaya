<?php
include "Conection.php";
$result = mysqli_query($conn, "SELECT * FROM tbl_admin");
?>
<html>
<head>    
    <title>Admin</title>
</head>

<body>

    <table width='80%' border=1>

    <tr>
       <th>Nama Mahasiswa</th> <th>id</th> <th>Jurusan</th> <th>Email</th> <th>Info</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
		echo "<td>".$user_data['Nama']."</td>";
		echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['Jurusan']."</td>";
        echo "<td>".$user_data['Email']."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[id]'>Update</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    } 
    ?>
	
    </table>
</body>
</html>
