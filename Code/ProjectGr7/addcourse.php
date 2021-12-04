<?php
    $conn = mysqli_connect('localhost','root','','registerphase');
    $Mamonhoc = $_GET['Mamonhoc'];
    $sql = "SELECT * FROM monhoc WHERE Mamonhoc='$Mamonhoc'";
    $kq = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($kq))
    {
        $Mamonhoc = $row['Mamonhoc'];
        $Tenmonhoc = $row['Tenmonhoc'];
        $Tinchi = $row['Tinchi'];
        $Makhoa = $row['Makhoa'];
        $Hocphi = $row['Hocphi'];
        $sql = "INSERT INTO `danhsachdadangky` (`Mamonhoc`, `Tenmonhoc`, `Tinchi`,`Makhoa`,`Hocphi`)
        VALUES ('".$row['Mamonhoc']."','".$row['Tenmonhoc']."','".$row['Tinchi']."','".$row['Makhoa']."','".$row['Hocphi']."')";
        $query = mysqli_query($conn, $sql);

        $sql = "SELECT SUM(Tinchi) FROM danhsachdadangky";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            $row['SUM(Tinchi)'];
            if($row['SUM(Tinchi)'] > 18)
            {
                echo "Bạn không thể đăng ký quá 18 tín chỉ. <a href='deletecourse2.php?Mamonhoc=".$Mamonhoc."' >Đăng ký lại";
            }
            else{
                echo "Đăng ký thành công! <a href='registersub.php'>Tiếp tục </a>"; 
            }
        }
    }
?>