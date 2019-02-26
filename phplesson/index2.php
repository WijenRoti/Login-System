<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<h2>Halaman pendaftaran</h2>
<form action="includes/signup.inc.php" method='POST'>
    <input type='text' name='first' placeholder='Your First Name'>
    <br> 
    <input type='text' name='last' placeholder='Your Last Name'> 
    <br>
    <input type='text' name='email' placeholder='E-Mail Anda'> 
    <br>
    <input type='text' name='uid' placeholder='Username'> 
    <br>
    <input type='password' name='pwd' placeholder='Masukkan Password Anda'> 
    <br>
    <button type='submit' name='submit'>Daftar</button>
</form>
<?php

/*
$sql = "select * from users where user_uid='Admin';";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);


if($resultcheck>0){
    while ($row = mysqli_fetch_assoc($result)){
        echo $row['user_uid']."<br>";
    }
}
*/


    $data = "Admin";
//create a template
    $sql = "SELECT * FROM users WHERE user_uid =?;";

    //create a prepared statement
    $stmt = mysqli_stmt_init($conn);
    //prepare the prepared statement
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL Statement is failed";
    }else{
        //bind parameter to the placeholder
        mysqli_stmt_bind_param($stmt, "s", $data);
        //run parameters inside database
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
    
        while($row = mysqli_fetch_assoc($result)){
            echo $row['user_uid'] . "<br>";
        }
    
    }


?>
    
</body>
</html>


