<?php
    session_start();
    session_destroy();
    
    $conn = mysqli_connect('localhost','root','','registerphase');
    $sql = "DELETE FROM danhsachdadangky";
    $kq = mysqli_query($conn, $sql);
    header("location:Loginphase.php");
    
?>