<?php
  require "../../DBMS/db.php";
  if(isset($_POST["Delete_Blog"])){
    $Delete_ID = mysqli_real_escape_string($conn,$_POST["Delete_ID"]);
  $query = "DELETE FROM blog WHERE `blog`.`ID` = '$Delete_ID'";
    if(mysqli_query($conn,$query)){
      header("Location: ".ROOT_URL."blog_index.php");
    }else{
      echo "ERROR:".mysqli_error($conn);
    }
  }

  $ID = mysqli_real_escape_string($conn,$_GET["ID"]);
  $query = "SELECT * FROM `blog` WHERE `ID` = $ID ";
  $result = mysqli_query($conn,$query);
  $blog = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Cousine:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" crossorigin="anonymous">
</head>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../../JavaScript/phpheadernest.js"></script>
    <link rel="stylesheet" href="../../CSS/general.css">
    <title>Vinnie's Trattoria</title>
    <style>
        html,
body {
    max-width: 100%;
    overflow-x: hidden;
    padding: 0;
    margin: 0;
}
.blog{
    margin:7.5vw auto;
}
body {
    background-color: #fbfaf1;
    width: 100vw;
}

.top{
    width:80vw;
    height:30vw;
    display: flex;
    flex-direction:row;
    justify-content:space-evenly;
    margin:2vw 10vw;
    margin-top:3vw;
}
.left{
    width:60%;
    margin-right:5vw;
    overflow:hidden;
}
.left img{
    height:30vw;
    object-fit:cover;
    
}
.right{
    width:40%
}

#blog_header {
    text-decoration: none;
    color: #383127;
    font-size: 2vw;
    font-weight: 700;
    letter-spacing: 0.15em;
    text-transform: uppercase;
}

#content {
    color: #383127;
    text-decoration: none;
    font-size: 1.3vw;
    font-weight: 400;
    overflow: hidden;
}

#date {
    text-decoration: none;
    color: #383127;
    text-decoration: none;
    font-size: 1vw;
    font-weight: 600;
    letter-spacing: 0.2em;
}

#author {
    text-decoration: none;
    color: #383127;
    text-decoration: none;
    font-size: 1.5vw;
    font-weight: 500;
    letter-spacing:0.3em;
}
.bottom{
    width:80vw;
    margin: 1vw 10vw;
}
section{
    margin:5vw auto;
    text-align:center;
}
section a{
    text-decoration: none;
    color: #383127;
    font-style: italic;
    font-size: 1.5vw;
    font-weight: 700;
    letter-spacing: 0.2em;
}

    </style>
</head>

<body>
    <main>
    <div class="blog">
    <div class="top">
        <div class="left">
            <img id="image" src="<?php echo $blog["Image_URL"] ?>" alt="">
        </div>
        <div class="right">
            <div class="div1"> <p id="date"><?php echo $blog["Date_Created"]  ?></p></div>
            <div class="div2"> <h1 id="blog_header"><?php echo $blog["Title"] ?></h1></div>
            <div class="div3"> <h3 id="author">By: <?php echo $blog["Author"]?></h3></div>
        </div>
    </div>
    <div class="bottom">
    <p id="content"><?php echo $blog["Content"] ?></p>
    </div>   
    <section>
            <a href="<?php echo ROOT_URL ?>PHP/BLOGPHP/blog_index.php">Check out our other blogs</a>
    </section>
    </div>

</main>
<footer
      class="text-center text-white"
      style="background-color: #a10412"
    >
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 CS 306: SPRING I PROJECT SUBMISSION BY
        <a class="text-white" href="../../HTML/credits.html">ONI LUCA</a>
      </div>
    </footer>
</body>

</html>