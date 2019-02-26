
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
 
    <link rel="stylesheet" href="style.css">
   
</head>
<body>

<h2 class='judul'>Halaman Pendaftaran</h2>
<br>
<form action="includes/signup3.inc.php" method='POST'>

    <?php
        if (isset($_GET['first'])) {
            $first = $_GET['first'];
            echo '<input type="text" name="first" placeholder="Your First Name" value="'.$first.'">';
        }else{
            echo '<input type="text" name="first" placeholder="Your First Name">';
        }

        if (isset($_GET['last'])) {
            $last = $_GET['last'];
            echo '<input type="text" name="last" placeholder="Your last Name" value="'.$last.'">';
        }else{
            echo '<input type="text" name="last" placeholder="Your last Name">';
        }
    ?>

    <input type='text' name='email' placeholder='E-Mail Anda'> 
    <br>

        <?php
        
        if (isset($_GET['uid'])) {
            $uid = $_GET['uid'];
            echo '<input type="text" name="uid" placeholder="Your username" value="'.$uid.'">';
        }else{
            echo '<input type="text" name="uid" placeholder="username">';
        }
        ?>

    <input type='password' name='pwd' placeholder='Masukkan Password Anda'> 
    <br>
    <button type='submit' name='submit'>Daftar</button>
</form>

    <?php
      /*  $fullUrl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (strpos($fullUrl, "signup=empty") == true) {
            echo "<p class='error'>You did not fill in all fields</p>";
            exit();
        }
        elseif (strpos($fullUrl, "signup=char") == true) {
            echo "<p class='error'>You use invalid character</p>";
            exit();
        }
        elseif (strpos($fullUrl, "signup=invalidemail") == true) {
            echo "<p class='error'>You use an invalid email</p>";
            exit();
        }
        elseif (strpos($fullUrl, "signup=success") == true) {
            echo "<p class='success'>You have been sign up</p>";
            exit();
        }
        */
        if (!isset($_GET['signup'])) {
            //bila form kosong semua
            exit();
        }
        else{
        //bila user menginput pada form
        
            $signupcheck = $_GET['signup'];

            if($signupcheck == 'empty'){
                echo '<p class=error>Isi form diatas!</p>';
                exit();
            }
            elseif($signupcheck == 'char'){
                echo '<p class=error>anda memasukkan character invalid!</p>';
                exit();
            }
            elseif($signupcheck =='email'){
                echo '<p class=error>anda memasukkan email yang tidak valid</p>';
                exit();
            }
            elseif($signupcheck == 'success'){
                echo '<p class=success>anda telah berhasil mendaftar!</p>';
                exit();
            }
        }
    ?>

</body>

</html>