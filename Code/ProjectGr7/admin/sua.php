<?php
    $con = mysqli_connect('localhost','root','','registerphase');
    if(isset($_GET['Mamonhoc']))
    {
        $MaMH = $_GET['Mamonhoc'];
    }
?>
<?php 
if(isset($_POST["sua"]))
{
    $Mamh = $_POST["Mamonhoc"];
    $Tenmh = $_POST["Tenmonhoc"];
    $TC = $_POST["Tinchi"];
    $MK = $_POST["Makhoa"];
    $HP = $_POST["Hocphi"];

    $sql = "UPDATE monhoc SET Mamonhoc = '$Mamh',Tenmonhoc ='$Tenmh', Tinchi='$TC', Makhoa='$MK', Hocphi='$HP' 
    WHERE Mamonhoc = '$MaMH'";
    $qr = mysqli_query($con,$sql);
    header("location:admincontrols.php");

}?>
<?php 
    $sql = "SELECT * FROM monhoc WHERE Mamonhoc = '$MaMH'";
    $qr = mysqli_query($con, $sql);
    $rows = mysqli_fetch_array($qr);
?>
<form method ="post" action="">
    <li style="width: 200px">Mã môn học </li> <input type="text" name="Mamonhoc" value="<?php echo $rows['Mamonhoc']?>" /> <br> <br>
    <li style="width: 200px">Tên môn học </li> <input type="text" name="Tenmonhoc" value="<?php echo $rows['Tenmonhoc']?>"  /> <br> <br>
    <li style="width: 200px">Tín chỉ </li> <input type="number" name="Tinchi" value="<?php echo $rows['Tinchi']?>"   /><br> <br>
    <li style="width: 200px">Mã khoa </li> <input type="text" name="Makhoa" value="<?php echo $rows['Makhoa']?>"  /><br> <br>
    <li style="width: 200px">Học phí </li> <input type="number" name="Hocphi" value="<?php echo $rows['Hocphi']?>"  /><br> <br>
    <input type="submit" name="sua" value="Sửa" /><br>
</form>