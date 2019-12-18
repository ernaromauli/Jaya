<?php 
 
include_once("conection.php");

if(isset($_POST['edit']))
{
$id = $_POST['id'];
$Nama_Mahasiswa= $_POST['Nama_Mahasiswa'];
$NIM= $_POST['NIM'];
$Nama_Prodi = $_POST['Nama_Prodi'];
$Jurusan = $_POST['Jurusan'];
$Email = $_POST['Email'];

 
$result = mysqli_query($mysqli, "UPDATE tbl_admin SET Nama_Mahasiswa ='$Nama_Mahasiswa', NIM ='$NIM', Nama_Prodi='$Nama_Prodi', Email='$Email', Telp='$Telp' WHERE id='$id'");
 
header("location:Admin.php?pesan=update");
 
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="Admin.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Mahasiswa</td>
                <td><input type="text" name="Nama_Mahasiswa" value=<?php echo $Nama_Mahasiswa;?>></td>
            </tr>
			<tr> 
                <td>NIM</td>
                <td><input type="text" name="NIM" value=<?php echo $NIM;?>></td>
            </tr>
            <tr>  
                <td>Nama Prodi</td>
                <td><input type="text" name="Nama_Prodi" value=<?php echo $Nama_Prodi;?>></td>
            </tr>
			<tr> 
                <td>Jurusan</td>
                <td><input type="text" name="Jurusan" value=<?php echo $Jurusan;?>></td>
            </tr>
			<tr>
                <td>Email</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>Info</td>
                <td><input type="text" name="info" value=<?php echo $info;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
