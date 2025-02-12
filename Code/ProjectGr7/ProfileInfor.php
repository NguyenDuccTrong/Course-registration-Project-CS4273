<?php
      include('Userdata.php');
      if(!$_SESSION['MSSV']){
        header('location:Loginphase.php');
      }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2F6c47512d-c83d-47d0-9b3a-f8cf28aade64.image.png?v=1638268575758" />

    <title>Đại Học Quốc Gia</title>

    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="./css/ProfileInfor.css" />
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
              <a href="tuitionfee.php">Thông tin học phí</a>
            </li4>
          </ul>
        </div>
        <div class="KhungSearch">
          <input class="search" type="search" placeholder="Tìm kiếm..." />
        </div>
      </nav>

      <header>
        <div class="title">
          <ul>
            ĐẠI HỌC QUỐC GIA THÀNH PHỐ HỒ CHÍ MINH TRƯỜNG ĐẠI HỌC CÔNG NGHỆ
            THÔNG TIN
          </ul>
        </div>
        <div class="UIT-logo">
          <img
            src="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2FUIT-logo.png?v=1638179317978"
          />
        </div>
      </header>
      <article>
        <ProfileInfor> <?php 
                             $MaSoSV = $_SESSION['MSSV'];
 
                             $sql="SELECT * FROM registration WHERE MaSoSV ='$MaSoSV'";
                             $kq=mysqli_query($conn,$sql);
                             if (mysqli_num_rows($kq) > 0) 
                             {
                                while ($row= mysqli_fetch_assoc($kq))
                                {
                                  echo "<img height='210px' width='210px' style='border-radius: 50%;'' src='".$row['avatar']."'>"; 
                                }                               
                             }
             ?></ProfileInfor>
        <ul class ="Hoten"> <?php 
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
             ?></ul> 
        <div class="Panel1"> </div>
        <div class="MSSV" id="MSSVTABLE">
          <ul>
            MSSV: <?php  
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
          </ul>
        </div>
        <div class="Panel2"></div>
        <div class="NGAYSINH" id="NGAYSINHTABLE">
          <ul>
            Ngày sinh: <?php   
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
                  ?>
          </ul>
        </div>
        <div class="Panel3"></div>
        <div class="LOP" id="LOPSINHTABLE">
        <ul>
            Lớp: <?php    
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
                  ?>
        </ul>
      </div>
      <div class="Panel4"></div>
      <div class="GIOITINH" id="GIOITINHSINHTABLE">
        <ul>
            Giới tính: <?php     
                             $MaSoSV = $_SESSION['MSSV'];
 
                             $sql="SELECT * FROM registration WHERE MaSoSV ='$MaSoSV'";
                             $kq=mysqli_query($conn,$sql);
                             if (mysqli_num_rows($kq) > 0) 
                             {
                                while ($row= mysqli_fetch_assoc($kq))
                                {
                                  echo $row['gender'];  
                                }                               
                             }
                  ?>
        </ul>
      </div>
      <form method="get" action="Logout.php">
        <button class="logout">
            <ul>
                LOG OUT
            </ul>
        </button>
      </form> 
      </article>
    </div>
  </body>
</html>
