<?php
    $angka1 = rand(1,10);
    $angka2 = rand(1,10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | VTantion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../res/vtantion-logo.png" type="image/x-icon">
</head>
<body>
    <div class="body">
        <div class="logo">
            <img src="vtantion-logo.png" alt="logo" height="50px">
        </div>
        <div class="container">
            <form action="index.php" method="post">
                <input type="text" name="inAnswer" value="<?php echo $angka1 + $angka2; ?>" hidden>
                <img src="vtantion-logo.png" alt="Logo" height="90px">
                <div class="status">
                    <?php 
                        if(isset($_POST['butt-login'])){
                            $username = $_POST['in-user'];
                            $password = $_POST['in-pass'];
                            $captcha = $_POST['in-captcha'];
                            $answer = $_POST['inAnswer'];
                            if($username=="udacodingid" && $password=="udacodingJaya2021"){
                                if($captcha==$answer){
                                    echo 'Login Berhasil!';
                                }
                                else{
                                    echo 'Captcha Salah!';
                                }
                            }
                            else if($username=='' || $password==''){
                                echo "Username atau Password Tidak Boleh Kosong!";
                            }
                            else if(strlen($password)<6){
                                echo 'Password Tidak Boleh Kurang Dari 6 Digit!';
                            }
                            else{
                                echo 'Username atau Password Salah!';
                            }
                        }
                    ?>
                </div>
                <input class="input-text" type="text" name="in-user" placeholder="Username">
                <input class="input-text" type="password" name="in-pass" placeholder="Password">
                <input class="input-text" type="number" name="in-captcha" placeholder="<?php echo $angka1; echo ' + '; echo $angka2;?>">
                <input type="submit" value="Login" name="butt-login">
            </form>
            <div class="regist-link">
                Don't Have Account? 
                <a href="">Create One Here</a>
            </div>
        </div>
        <div class="filter-background"></div>
    </div>
</body>
</html>