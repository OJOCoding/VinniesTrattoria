<?php 

if(isset($_POST['username']) && isset($_POST['password'])) { 
	include('../../DBMS/db.php'); //code is given below (used for database connection) 
	$user = $_POST['username']; 
	$pass = $_POST['password']; 

	$ret = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass' ") or die("Could not execute query: " .mysqli_error($conn)); 
	$row = mysqli_fetch_assoc($ret); 

	if(!$row) { 
        header("Location: ".ROOT_URL."/PHP/ADMIN/admin.php");		
    } 
	else { 
        header("Location: ".ROOT_URL."/PHP/ADMIN/admin_panel.php");		
    } 
} 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cousine:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>ADMIN LOGIN</title>
    <style>
        *,
        ::before,
        ::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        * {
    font-family: "Cousine", monospace;
  }
        body {
            background: #f1f1f1;
        }

        .home {
            height: 100vh;
            position: relative;
        }

        video {
            object-fit: cover;
            position: absolute;
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 2;
            background: rgba(0, 0, 0, 0.6);
        }

        .home-content {
            width: 100vw;
            margin: 0 auto;
            position: relative;
            top: 150px;
            color: #fff;
            z-index: 3;
        }

        .home-content h1 {
            text-align: center;
            text-transform: uppercase;
            font-size: 85px;
            line-height: 1.1;
        }
       
        form{
    height: 25vw;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: relative;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 20px 35px;
    margin: 2vw 37.5vw;
}
form *{
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
    </style>
</head>

<body>
    <div class="home">
        <video autoplay muted loop>
            <source src="../../images/video.mp4" type="video/mp4" />
        </video>
        <div class="home-content">
            <h1>Admin login Page </h1>
            <div class="log-form">
            <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" placeholder="Username" name="username" id="username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password">

        <button>Log In</button>
    </form>
            </div>
        </div>
    </div>
    <div class="overlay"></div>

</body>

</html>
