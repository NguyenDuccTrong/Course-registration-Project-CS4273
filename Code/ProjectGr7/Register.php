<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/Register.css">
        <link rel="icon" href="https://cdn.glitch.me/3e30c75a-6d2a-4b95-8549-1941573d75cf%2F6c47512d-c83d-47d0-9b3a-f8cf28aade64.image.png?v=1638268575758" />;
        <title>Registation</title>
    </head>
        <body>
            <div class="container">
                <article>
                    <div class="KhungDK">
                        <div class="Panel1"></div>
                        <div class="title">
                            <ul>
                                REGISTER
                            </ul>
                        </div>                       
                        <form action="RegisterConnect.php" method="post" id="Register" class="register-form" >
                            <input type="text" name="HoTen" class="input-field" placeholder="Nhập họ tên..." required>
                            <input type="number" name ="MaSoSV" class="input-field" placeholder="Nhập MSSV..." required>
                            <input type="password" name="MatKhau" class="input-field" placeholder="Nhập mật khẩu..." minlength="8" required>
                            <input type="text" name="Lop" class="input-field" placeholder="Nhập lớp..." required>
                            <input type="text" name="NgaySinh" class="input-field" placeholder="Nhập ngày sinh..." required>
                            <label for ="male" class="GDer"><input type="radio" name="gender" value="Nam" id="male" required>Nam</label>
                            <label for ="female" class="GDer"><input type="radio" name="gender" value="Nữ" id="female" required>Nữ</label>
                            <button type="submit" name ="submit" class="submit-butt">REGISTER</button>
                        </form>
                    </div>
                </article>
            </div>
        </body>
</html>