<?php

    session_start();
    header('location:Loginphase.php');
    
    //Database connection
    $con = mysqli_connect('localhost','root','','registerphase');
    $HoTen = $_POST['HoTen'];
    $MaSoSV = $_POST['MaSoSV'];
    $MatKhau = $_POST['MatKhau'];
    $gender = $_POST['gender'];
    $Lop = $_POST['Lop'];
    $NgaySinh = $_POST['NgaySinh'];
    
    $s = "SELECT * FROM registration WHERE HoTen = '$HoTen' ";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    
    if($num == 1){
        echo"Tên bị trùng";
    }else{
        $reg = "INSERT INTO registration (MaSoSV,HoTen,MatKhau,Lop,NgaySinh) VALUES ('$MaSoSV','$HoTen','$MatKhau','$Lop','$NgaySinh')";
        mysqli_query($con, $reg);
        echo"Đăng Ký Thành Công";
    }

   
    
?>