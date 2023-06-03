<?php
require "../../DBMS/db.php";

if (isset($_POST["submit"])) {
    $Title = mysqli_real_escape_string($conn, $_POST["Title"]);
    $Author = mysqli_real_escape_string($conn, $_POST["Author"]);
    $Content = mysqli_real_escape_string($conn, $_POST["Content"]);
    $Image_URL = mysqli_real_escape_string($conn, $_POST["Image_URL"]);

    $query = " INSERT INTO `blog` ( `Title`, `Author`, `Content`, `Date_Created`,`Image_URL`) VALUES ( '$Title', '$Author', '$Content', current_timestamp(), '$Image_URL');";

    header("Location: " . ROOT_URL . "PHP/BLOGPHP/blog_index.php");
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
  <title>Vinnie's Tratoria</title>
  <style>
        html,
body {
    max-width: 100%;
    overflow-x: hidden;
    padding: 0;
    margin: 0;
}

body {
    background-color: #fbfaf1;
    width: 100vw;
}

.container-fluid {
    margin-top: 5vw;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    background-color: #383127;
}

.editor {
  font-weight: 600;
  font-size: 1.5vw;
  line-height: 25px;
  color: #383127;
  text-decoration: none;
  letter-spacing: 0.3em;
  text-transform: uppercase;
  text-align: center;
  margin-top: 5vw;
}

input[type="text"],
select,
textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: none;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

.btn{
  background-color: #A10412;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  margin: 1vw auto;
  width: 100%;
}

.container {
  border-radius: 5px;
  padding: 20px;
  width: 60vw;
  margin: 5vw auto;
  background: radial-gradient(
    50% 60% at 50% 50%,
    #f8b960 0%,
    rgba(248, 185, 96, 0.48) 100%
  );
}

.col-25 {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding-right: 10px;
}

.col-75 {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  padding-left: 10px;
}

.row:after {
  content: '';
  display: table;
  clear: both;
}

@media (max-width: 768px) {
  .col-25,
  .col-75 {
    width: 100%;
  }
}
</style>
</head>
<body><main>
  <div class="container-fluid  text-light py-4">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h1 class="display-4 mb-0">Blog Your Way</h1>
        <p class="lead">Share your thoughts and ideas with the world!</p>
      </div>
    </div>
  </div>
  <div class="container my-5">
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      <div class="row mb-3">
        <label for="title" class="col-sm-2 col-form-label">Blog Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="Title">
        </div>
      </div>
      <div class="row mb-3">
        <label for="author" class="col-sm-2 col-form-label">Author</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="Author">
        </div>
      </div>
      <div class="row mb-3">
        <label for="content" class="col-sm-2 col-form-label">Blog Content</label>
        <div class="col-sm-10">
          <textarea id="Content" name="Content" class="form-control" style="height:10vw"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <label for="Image_URL" class="col-sm-2 col-form-label">Image URL</label>
        <div class="col-sm-10">
          <input id="box" type="text" class="form-control" name="Image_URL">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-10 offset-sm-2">
          <input type="submit" class="btn" value="Submit" name="submit">
        </div>
      </div>
    </form>
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
