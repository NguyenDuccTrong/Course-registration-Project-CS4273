<?php
    include('../Userdata.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admincss/admincontrols.css">
    <link rel="icon" href="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2F6c47512d-c83d-47d0-9b3a-f8cf28aade64.image.png?v=1638268575758" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <title>Đại Học Quốc Gia</title>
</head>
<body>
    <div class="container">
        <nav>
          <div class ="Home">
                <a href="adminhomepage.php">
                    <img src="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2Fhome.png?v=1638179317687" alt=""/>
                </a>       
            </div>
            <div class ="Menu">
                <ul>
                    <li1>
                        <a href="adminhomepage.php">Thông báo</a>
                     </li1>
                    <li2>
                        <a href="#DSDK">Quản lý môn học</a>
                     </li2>
                     <li3>
                        <a href="../Logout.php">Thoát Quyền Admin</a>
                     </li3>
                </ul>
            </div>
          <div class="KhungSearch">
                <input class="search" type ="search" placeholder="Tìm kiếm...">
            </div>
          </nav>
      <header>
          <div class="info-school">
              <ul>
                  ĐẠI HỌC QUỐC GIA THÀNH PHỐ HỒ CHÍ MINH
                  <br>
                  TRƯỜNG ĐẠI HỌC CÔNG NGHỆ THÔNG TIN
              </ul>
          </div>
        <div class="UIT-logo">
          <img src="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2FUIT-logo.png?v=1638179317978", alt="">
        </div>
      </header>
      <article>
          <div class="text-list-register-sub" id="DSDK">
              <ul>
                  DANH SÁCH ĐĂNG KÍ MÔN HỌC
              </ul>
          </div>
        <div class="infor-course-box">
            <table>
                <thead>
                <tr>
                <th>STT</th> 
                <th>Mã môn</th>
                <th>Tên lớp</th>
                <th>Tên môn học</th>
                <th>Tín chỉ</th>
                <th colspan="2" > <a style="text-decoration:none" href="them.php"> Thêm </a> </th>
                 </tr>
                </thead>
                <tbody>
                  <?php 
                    $sql = "SELECT * FROM monhoc";
                    $id=0;
                    $kq = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($kq) > 0){
                      while($row = mysqli_fetch_assoc($kq)){
                        $Mamonhoc = $row['Mamonhoc'];
                        $id+=1;
                        ?>
                         <tr>
                          <td><?php echo $id ?> </td>
                          <td><?php echo $row['Mamonhoc'] ?></td>
                          <td><?php echo $row['Makhoa'] ?></td>
                          <td><?php echo $row['Tenmonhoc'] ?></td>
                          <td><?php echo $row['Tinchi'] ?></td>
                          <td> <a style="text-decoration:none" href="sua.php?Mamonhoc=<?php echo $row['Mamonhoc'] ?>"> Sửa </a></td>
                          <td><a style="text-decoration:none" href="xoa.php?Mamonhoc=<?php echo $row['Mamonhoc'] ?> ">Xóa </a> </td>  
                          </tr>
                          <?php
                      }
                    }
                  ?>
                </tbody>
                </tr>
            </table>
        </div>
      </article>
</body>
</html>
