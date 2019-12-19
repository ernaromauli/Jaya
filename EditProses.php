<?php
    include ("conection1.php");
    
    if(isset($_POST['edit'])){
        $id = $_POST['Nim'];
        $Mahasiswa = $_POST['Nama'];
        $email = $_POST['email'];
        $Matakuliah = $_POST['Matakuliah'];

        $sql = "UPDATE tbl_admin SET Nama_Mahasiswa = '$Mahasiswa', Email='$email', ID_Matakuliah=$Matakuliah Where NIM=$id";
        $query = mysqli_query($conn, $sql);

        if ( $query ){
            header ('Location: Admin.php');
        }else{
        header ('Location: Admin.php');
        }
    }
?>
