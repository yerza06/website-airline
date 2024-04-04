<?php
include("connect.php");
function getData()
{
  $data = array();
  $data[1] = $_POST['name'];
  $data[2] = $_POST['email'];
  $data[3] = $_POST['password'];
  return $data;
}
if (isset($_POST['insert'])) {
  $info = getData();
  $insert = "INSERT INTO [userdata] ([name]
  ,[email]
  ,[password]) VALUES ('$info[1]', '$info[2]', '$info[3]')";
  $result = odbc_exec($connection, $insert);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style-register.css">
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->
</head>
<body>
    <header>
        <div class="logo">
            <img src="image/free-icon-eagle-white.png" alt="logo">
            <a href="/index.php">AIRSAYAHAT</a>
        </div>
        <nav>
            <a href="/index-bailanystar.php">Bailanystar</a>
            <a href="/index-bagaj.php">Bagaj</a>
            <a href="/index-faq.php">FAQ</a>
            <button name="register-or-login" id="register-or-login" onclick=location.href="/index-register.php">Kirý /Tirkelý</button>
        </nav>
    </header>
    <div class="wrapper">
        <div class="form-box">
            <h3>Tirkeý</h3>
            <form action="" method="post">
                    <section id="input-box">
                        <label>Aty jóni</label>
                        <input type="text" name="name" id="name">
                        <br>
                        <label>Email</label>
                        <input type="text" name="email" id="email">
                        <br>
                        <label>Qupıa sóz</label>    
                        <input type="password" name="password" id="password">
                    </section>
                <button type="submit" name="insert">Tirkelý</button>
            </div>
        </form>
    </div>
    <footer>
        <div class="about">
            <div class="logo">
                <img src="image/free-icon-eagle-white.png" alt="logo">
                <a href="/index.php">AIRSAYAHAT</a>
            </div>
            <nav>
                <ul>
                    <li><a href="#"><div class="youtube"></div></a></li>
                    <li><a href="#"><div class="facebook"></div></a></li>
                    <li><a href="#"><div class="twitter"></div></a></li>
                </ul>
            </nav>
            <h6>Sizdiń aqyl-oıyńyz sezimderińizden kúshti bolýy kerek. Ushý!</h6>
            <p>©2024 Барлық құқықтар қорғалған.</p>
        </div>
        <dir class="conteiner">

        </dir>
    </footer>
</body>
</html>