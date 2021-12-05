<?php
    $conn = mysqli_connect('localhost','root','','registerphase');
    $Mamonhoc = $_GET['Mamonhoc'];
    $sql = "DELETE FROM monhoc WHERE Mamonhoc = '$Mamonhoc'";
    $kq = mysqli_query($conn, $sql);
    if($kq){
        header("location:admincontrols.php");
    }
?>