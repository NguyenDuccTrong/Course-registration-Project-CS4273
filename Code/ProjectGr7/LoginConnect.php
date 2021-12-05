<?php

    session_start();
    
    //Database connection
    $con = mysqli_connect('localhost','root','','registerphase');
    $MaSoSV = $_POST['InputMSSV'];
    $MatKhau = $_POST['InputMK'];
    $HoTen = $_POST['HoTen'];
    $gender = $_POST['gender'];
    $Lop = $_POST['Lop'];
    $NgaySinh = $_POST['NgaySinh'];

    $s = "SELECT * FROM registration WHERE MaSoSV = '$MaSoSV' && MatKhau = '$MatKhau' ";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    
    if($num == 1){
        header('location:Mainpage.php');  
    }else{
        header('location:Loginphase.php');
    }
    
    if(isset($_POST['login_user']))
    {
        $_SESSION['MSSV']=$MaSoSV;
        include('ProfileInfor.php');
    }
    if($MaSoSV == 'admin')
    {
        header('location:./admin/adminhomepage.php');
    }

?>