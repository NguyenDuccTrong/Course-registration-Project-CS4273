<?php
    include('Userdata.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name = "viewport" content="width=device-width, initial-scale=1.0"/ />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2F6c47512d-c83d-47d0-9b3a-f8cf28aade64.image.png?v=1638268575758" />
    <title>Đại Học Quốc Gia</title>
    <link rel="stylesheet" href="./css/tuitionfee.css" />
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="Home">
          <a href="Mainpage.php">
            <img
              src="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2Fhome.png?v=1638179317687"
              alt=""
            />
          </a>
          <div class="user-icon">
            <a href="ProfileInfor.php">
              <img
                src="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2Fuser-icon.png?v=1638179317687"
                alt=""
              />
            </a>
          </div>
        </div>
        <div class="Menu">
          <ul>
            <li1>
              <a href="Mainpage.php">Thông báo</a>
            </li1>
            <li2>
              <a href="registersub.php">Đăng kí học phần</a>
            </li2>

            <li3>
              <a href="editcourse.php">Hiệu chỉnh ĐKHP</a>
            </li3>

            <li4>
              <a href="#TTHP">Thông tin học phí</a>
            </li4>
          </ul>
        </div>
        <div class="KhungSearch">
          <input class="search" type="search" placeholder="Tìm kiếm..." />
        </div>
      </nav>
      <header>
        <div class="info-school">
          <ul>
            ĐẠI HỌC QUỐC GIA THÀNH PHỐ HỒ CHÍ MINH
            <br />
            TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN
          </ul>
        </div>
        <div class="UIT-logo">
          <img
            src="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2FUIT-logo.png?v=1638179317978"
            ,
            alt=""
          />
        </div>
      </header>
      <article>
        <div class="information-course" id="TTHP">
          <ul>
            Thông tin học phí
          </ul>
        </div>
        <div class="information-student">
          <ul>
            Thông tin sinh viên
          </ul>
        </div>
          <div class="information-student-box">
          <table id="info-student">
          <tr>
            <th>Họ và tên</th>
            <td>
                <?php 
                             $MaSoSV = $_SESSION['MSSV'];
 
                             $sql="SELECT * FROM registration WHERE MaSoSV ='$MaSoSV'";
                             $kq=mysqli_query($conn,$sql);
                             if (mysqli_num_rows($kq) > 0) 
                             {
                                while ($row= mysqli_fetch_assoc($kq))
                                {
                                  echo $row['HoTen'];  
                                }                               
                             }
             ?>
              </td>
          </tr>
          <tr>
            <th>MSSV</th>
            <td>
              <?php 
                             $MaSoSV = $_SESSION['MSSV'];
 
                             $sql="SELECT * FROM registration WHERE MaSoSV ='$MaSoSV'";
                             $kq=mysqli_query($conn,$sql);
                             if (mysqli_num_rows($kq) > 0) 
                             {
                                while ($row= mysqli_fetch_assoc($kq))
                                {
                                  echo $row['MaSoSV'];  
                                }                               
                             }
             ?>
            </td>
          </tr>
          <tr>
            <th>Lớp</th>
            <td><?php 
                             $MaSoSV = $_SESSION['MSSV'];
 
                             $sql="SELECT * FROM registration WHERE MaSoSV ='$MaSoSV'";
                             $kq=mysqli_query($conn,$sql);
                             if (mysqli_num_rows($kq) > 0) 
                             {
                                while ($row= mysqli_fetch_assoc($kq))
                                {
                                  echo $row['Lop'];  
                                }                               
                             }
             ?></td>
          </tr>
          <tr>
            <th>Ngày sinh</th>
            <td><?php 
                             $MaSoSV = $_SESSION['MSSV'];
 
                             $sql="SELECT * FROM registration WHERE MaSoSV ='$MaSoSV'";
                             $kq=mysqli_query($conn,$sql);
                             if (mysqli_num_rows($kq) > 0) 
                             {
                                while ($row= mysqli_fetch_assoc($kq))
                                {
                                  echo $row['NgaySinh'];  
                                }                               
                             }
             ?></td>
          </tr>
          </table>
        </div>
        <div class="information-course-term">
          <ul>
            Thông tin học phí HK
          </ul>
        </div>
        <div class="information-course-term-box">
        <table>
          <tr>
            <th>Số tín chỉ</th>
            <td><?php 
                             $tc ="SELECT SUM(Tinchi) FROM danhsachdadangky";
                             $kq=mysqli_query($conn,$tc);
                             if (mysqli_num_rows($kq) > 0) 
                             {
                                while ($row= mysqli_fetch_assoc($kq))
                                {
                                  echo  $row['SUM(Tinchi)'];  
                                }                               
                             }
             ?></td>
          </tr>
          <tr>
            <th>Môn đăng ký</th>
            <td><?php 
                             $tc ="SELECT Mamonhoc FROM danhsachdadangky";
                             $kq=mysqli_query($conn,$tc);
                             if (mysqli_num_rows($kq) > 0) 
                             {
                                while ($row= mysqli_fetch_assoc($kq))
                                {
                                  echo  $row['Mamonhoc'];
                                  echo " ";
                                }                               
                             }
             ?></td>
          </tr>
          <tr>
            <th>Học phí</th>
            <td><?php 
                             $tc ="SELECT SUM(Hocphi) FROM danhsachdadangky";
                             $kq=mysqli_query($conn,$tc);
                             if (mysqli_num_rows($kq) > 0) 
                             {
                                while ($row= mysqli_fetch_assoc($kq))
                                {
                                  echo  $row['SUM(Hocphi)'];  
                                }                               
                             }
             ?> VNĐ</td>
          </tr>
          <tr>
            <th>Số tiền phải đóng</th>
            <td><?php 
                             $tc ="SELECT SUM(Hocphi) FROM danhsachdadangky";
                             $kq=mysqli_query($conn,$tc);
                             if (mysqli_num_rows($kq) > 0) 
                             {
                                while ($row= mysqli_fetch_assoc($kq))
                                {
                                  echo  $row['SUM(Hocphi)'];  
                                }                               
                             }
             ?> VNĐ</td>
          </tr>
          <tr>
            <th>Nợ học kì trước</th>
            <td>0</td>
          </tr>
          <tr>
            <th>Còn nợ</th>
            <td>0</td>
          </tr>
          <tr>
            <th>Tại ngân hàng</th>
            <td></td>
          </tr>
          <tr>
            <th>Thời gian đóng</th>
            <td></td>
          </tr>
          <tr>
            <th>Ghi chú</th>
            <td></td>
          </tr>
        </table>
        </div>
        <div class="Show-detail-course">
          <ul>
            Hiển thị chi tiết ĐKHP và học phí các môn trả nợ, cải thiện (nếu có)
          </ul>
        </div>
        
          <form method="get" action="paytuition.php">
            <button class="button-pay-course">
              <ul>
                Nộp học phí
              </ul>
            </button>
          </form>
          
      </article>
    </div>
    <script src="main.js"></script>
  </body>
</html>
