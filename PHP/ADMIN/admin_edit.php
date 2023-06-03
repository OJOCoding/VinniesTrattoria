<?php
  include "../../DBMS/db.php";
  $ID = mysqli_real_escape_string($conn,$_GET["id"]);	
		$query = "SELECT * FROM `blog` WHERE `ID` = $ID ";
		$result = mysqli_query($conn,$query);	  
		$blog = mysqli_fetch_assoc($result);	  
		mysqli_free_result($result);
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
      href="https://fonts.googleapis.com/css2?family=Cousine:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
	<title>Vinnie's Trattoria</title>
	<style>
		  html,
body {
    max-width: 100%;
    overflow: hidden;
    padding: 0;
    margin: 0;
}
* {
    font-family: "Cousine", monospace;
  }
body {
    background-color: #2b2b2b; ;
    width: 100vw;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

input[type=submit] {
  background-color: #A10412;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 15px;
  cursor: pointer;
  float: right;
  margin-top:1vw;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width:80vw;
  margin: 5vw 10vw;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


	</style>
</head>
<body>
	<div class="container">
	<form action="admin_update.php?ID=<?php echo $blog['ID']; ?>&table=blog" method="post">
		<div class="row">
      <div class="col-25">
        <label for="title">Blog Title</label>
      </div>
      <div class="col-75">
      <input id="title" type="text" name="Title" value="<?php echo $blog["Title"] ?>"> 
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="author">Author</label>
      </div>
      <div class="col-75">
        <input id="author" type="text" name="Author" value="<?php echo $blog["Author"] ?>"> 
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="content">Blog Content</label>
      </div>
      <div class="col-75">
        <textarea id="Content" name="Content" style="height:10vw"><?php echo $blog["Content"] ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Image_URL">Image URL</label>
      </div>
      <div class="col-75">
      <input id="box" type="text" name="Image_URL" value="<?php echo $blog["Image_URL"] ?>"> 
      </div>
    </div>
    <div class="row">
	<input class="upbutton" type="submit" value="Submit" name="submit">

    </div>
  </form>
  </div>
	</body>
</html>
