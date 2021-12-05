<?php
    $con = mysqli_connect('localhost','root','','registerphase');
    if(isset($_POST["them"]))
    {
        $MaMH = $_POST["Mamon"];
        $TenMH = $_POST["Tenmon"];
        $TC = $_POST["Tinchi"];
        $Makhoa = $_POST["Makhoa"];
        $HP = $_POST["Hocphi"];

        $sql = "INSERT INTO monhoc (`Mamonhoc`, `Tenmonhoc`, `Tinchi`, `Makhoa`, `Hocphi`) 
        VALUES ('$MaMH','$TenMH','$TC','$Makhoa','$HP')";
        $query = mysqli_query($con,$sql);
        header("location:admincontrols.php");

    }
?>

<form method ="post" action="">
    <li style="width: 200px">Mã môn học </li> <input type="text" name="Mamon" required /> <br> <br>
    <li style="width: 200px">Tên môn học </li> <input type="text" name="Tenmon" required  /> <br> <br>
    <li style="width: 200px">Tín chỉ </li> <input type="number" name="Tinchi" required  /><br> <br>
    <li style="width: 200px">Mã khoa </li> <input type="text" name="Makhoa" required  /><br> <br>
    <li style="width: 200px">Học phí </li> <input type="number" name="Hocphi" required /><br> <br>
    <input type="submit" name="them" value="Thêm môn" /><br>
</form>