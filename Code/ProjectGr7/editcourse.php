<?php
    include('Userdata.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/editcourse.css">
    <link rel="icon" href="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2F6c47512d-c83d-47d0-9b3a-f8cf28aade64.image.png?v=1638268575758" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <title>Đại học quốc gia</title>
</head>
<body>
    <div class="container">
        <nav>
          <div class ="Home">
                <a href="Mainpage.php">
                    <img src="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2Fhome.png?v=1638179317687" alt=""/>
                </a>
            <div class="user-icon">
              <a href="ProfileInfor.php">
                <img src="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2Fuser-icon.png?v=1638179317687" alt=""/>
              </a>
            </div>
            
            </div>
            <div class ="Menu">
                <ul>
                    <li1>
                        <a href="Mainpage.php">Thông báo</a>
                     </li1>
                    <li2>
                        <a href="registersub.php">Đăng kí học phần</a>
                     </li2>
                     
                     <li3>
                       <a href="#DSMH">Hiệu chỉnh ĐKHP</a>
                     </li3>
         
                     <li4>
                       <a href="tuitionfee.php">Thông tin học phí</a>
                      </li4>
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
          <div class="list-add-course-text">
              <ul>
                  DANH SÁCH CÁC MÔN ĐÃ ĐĂNG KÝ
              </ul>
          </div>
          <div class="list-add-course-box">
              <table>
                  <thead>
                      <tr>
                          <th>STT</th>
                          <th>Mã môn</th>
                          <th>Tên lớp</th>
                          <th>Tên môn học</th>
                          <th>Tín chỉ</th>
                          <th>Học phí</th>
                          <th>Xóa</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $sql = "SELECT * FROM danhsachdadangky";
                        $id=0;
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                            $id+=1;
                            ?>
                                <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $row['Mamonhoc'] ?></td>
                                <td><?php echo $row['Makhoa'] ?></td>
                                <td><?php echo $row['Tenmonhoc'] ?></td>
                                <td><?php echo $row['Tinchi'] ?></td>
                                <td><?php echo $row['Hocphi'] ?> </td>
                                <td><a style="text-decoration:none; font-size:25px" href ="deletecourse.php?Mamonhoc=<?php echo $row['Mamonhoc']; ?>">🗑</a></td>
                                </tr>
                            <?php
                            }
                         }
                    ?>
                  </tbody>
              </table>
          </div>
      </article>
</body>
</html>
