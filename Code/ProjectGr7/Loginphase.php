<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2F6c47512d-c83d-47d0-9b3a-f8cf28aade64.image.png?v=1638268575758" />

    <title>Đại Học Quốc Gia</title>

    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="./css/Loginphase.css" />
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="Home">
          <a href="#Title">
            <img
              src="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2Fhome.png?v=1638179317687"
              ,
              alt=""
            />
          </a>
        </div>
        <div class="menu">
          <ul>
            <li>
              <a href="#TBtable">Thông Báo</a>
            </li>
          </ul>
        </div>
        <div class="KhungSearch">
          <input class="search" type="search" placeholder="Tìm kiếm..." />
        </div>
      </nav>

      <header>
        <div class="title" id="Title">
          <ul>
            ĐẠI HỌC QUỐC GIA THÀNH PHỐ HỒ CHÍ MINH TRƯỜNG ĐẠI HỌC CÔNG NGHỆ
            THÔNG TIN
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
        <div class="Panel3"></div>
        <div class="Thongbaotable" id="TBtable">
          <ul>
            Thông Báo Chung
          </ul>
        </div>
        <div class="Panel4">
          <ul>
            > Thông báo thi CK HK1 NH 2021-2022 và ĐKHP các lớp buổi tối, chủ
            nhật - 25/11/2021 - 11:03
            <br />
            <br />
            > Thông báo Kế hoạch xét Tốt nghiệp đợt 4 năm 2021 - 23/11/2021 -
            11:13
            <br />
            <br />
            > Thông báo lịch ĐKHP trong HK2 NH 2021-2022 - 22/11/2021 - 14:23
            <br />
            <br />
            > Thông báo về việc thu học phí ĐỢT 2, Học kỳ 1, năm học 2021-2022
            Hệ ĐTĐH Chính quy - 14/09/2021 - 15:48
            <br />
            <br />
            > Hướng dẫn triển khai dạy và học qua mạng trong thời gian phòng
            chống dịch COVID-19 - 27/03/2020 - 11:28
          </ul>
        </div>

        <div class="Panel1"></div>
        <div class="Logintable">
          <ul>
            Đăng Nhập
          </ul>
        </div>
        <div class="Panel2">
          <form action="LoginConnect.php" method="post" id="Login" class="login-form">
          <ul class="Tendangnhap">
            Nhập Mã Số Sinh Viên:
          </ul>
          <div class="KhungNhaptenDN">
            <input name="InputMSSV" class="InputTenDN" size="40" type="text" required />
          </div>

          <ul class="matkhau">
            Mật Khẩu:
          </ul>
          <div class="KhungMatKhau">
            <input name="InputMK" class="InputMatKhau" size="40" type="password" required />
          </div>

          <button type="submit" class="loginbutton" name="login_user">
            <img
              src="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2Flogin-butt.png?v=1638179317687"
            />
          </button>
          </form>
          <ul class="QuenMK">
            <a href = "Register.php">Đăng Ký Tài Khoản</a>
          </ul>
        </div>
      </article>
    </div>
  </body>
</html>
