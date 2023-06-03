<?php
require "../../DBMS/db.php";
$query = "SELECT * FROM `blog`";
$result = mysqli_query($conn, $query);
$blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
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
    <script>
        function doSth(i){
            if(!confirm("Thank you for subscribing to our newsletter! Press Ok to continue!")) {
                return false;
            }
            this.form.submit();
        }
    </script>
    <script src="../../JavaScript/JavaScript/phpheadernest.js"></script>
    <link rel="stylesheet" href="../../CSS/general.css">
    <style>html,
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

.blog-banner {
    height: 37.5vw;
    top: 5vw;
    text-align: center;
}

.blurry {
    height: 37.5vw;
    object-fit: cover;
    filter: blur(5px);
    z-index: 1;
    width: 100vw;
}

.blog-banner h1 {
    font-weight: 600;
    font-size: 2.5vw;
    line-height: 25px;
    color: #fbfaf1;
    text-decoration: none;
    letter-spacing: 0.3em;
    position: relative;
    top: -15vw;
}

.blog-banner h2 {
    font-weight: 500;
    font-size: 1.5vw;
    line-height: 25px;
    color: #fbfaf1;
    text-decoration: none;
    letter-spacing: 0.2em;
    position: relative;
    top: -14vw;
}


.blog_content {
    height: 22.5vw;
    width: 50vw;
}

.blog-img {
    height: 20vw;
    width: 35vw;
}

#image{
    height: inherit;
    object-fit: cover;
}

#content {
    color: #383127;
    text-decoration: none;
    font-size: 1.3vw;
    font-weight: 400;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    font-style: italic;
}

#read-more {
    text-decoration: none;
    color: #383127;
    font-size: 1.2vw;
    font-weight: 600;
    letter-spacing: 0.1em;
}

#add {
    text-decoration: none;
    color: #383127;
    font-style: italic;
    font-size: 1.5vw;
    font-weight: 700;
    letter-spacing: 0.2em;
    margin:5vw;
}

#Date {
    text-decoration: none;
    color: #383127;
    font-size: 1vw;
    font-weight: 600;
    letter-spacing: 0.2em;
}

#author {
    text-decoration: none;
    color: #383127;
    font-size: 1.25vw;
    font-weight: 500;
}

#blog-header {
    text-decoration: none;
    color: #383127;
    font-size: 1.5vw;
    text-transform: uppercase;
}


html {
    scroll-behavior: smooth;
}
.newsletter {
    padding: 80px 80px;
    background-color: rgba(248, 185, 96, 0.85);
    margin-top:2vw;
}

.newsletter .content {
    max-width: 650px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    z-index: 2; }
    .newsletter .content h2 {
    color: #383838;
    margin-bottom: 40px; }
    .newsletter .content .form-control {
    height: 50px;
    border-color: #ffffff;
    border-radius:0;
}
.newsletter .content.form-control:focus {
    box-shadow: none;
    border: 2px solid #243c4f;
}
.newsletter .content .btn {
    min-height: 50px;
    border-radius:0;
    background: #A10412 ;
    color: #fff;
    font-weight:600;
}

#buttons-container{
    margin:2vw;
}
.container1 {
    width: 70vw;
    padding-right: 15px;
    padding-left: 15px;
    margin-left: 7.5vw;
}
</style>
</head>
<body>
    <main>
    <section class="blog-banner">
            <img class="blurry" src="../../images/Blog_Header.jpg" alt="">
            <h1>FOOD & INSIGHTS AT VINNIE’S TRATTORIA</h1>
            <h2>CHECK OUT SOME OF OUR RECENT NEWS AND ACHIEVEMENTS</h2>
</section>
<section>
<div id="buttons-container" class="d-flex align-items-center justify-content-center">
    <button type="button" class="btn btn-dark btn-rounded m-2" disabled>TRY FILTERING</button>
    <button id="sort-title-button" class="btn btn-outline-dark btn-rounded m-2" data-mdb-ripple-color="dark">Sort by Title</button>
    <button id="sort-date-button" class="btn btn-outline-dark btn-rounded m-2" data-mdb-ripple-color="dark">Sort by Date</button>
    <button id="sort-author-button" class="btn btn-outline-dark btn-rounded m-2" data-mdb-ripple-color="dark">Sort by Author</button>
    <button id="reset-button" class="btn btn-outline-dark btn-rounded m-2" data-mdb-ripple-color="dark">Reset</button>
</div>
        <div id="blog-container" class="container1 wrapper">
        
            <?php foreach ($blogs as $blog): ?>
                <div class="blog_entry row">
                <div class="blog_content col-md-8">
                    <p id="Date"class="mb-1">DATE <?php echo $blog["Date_Created"] ?></p>
                    <h1 id="blog-header"class="mb-3"><?php echo $blog["Title"] ?></h1>
                    <h3 id="author"class="mb-4"><?php echo $blog["Author"] ?></h3>
                    <p id="content"class="mb-4"><?php echo $blog["Content"] ?></p>
                    <a id="read-more" class="btn btn-outline-dark mb-4" href="blog.php?ID=<?php echo $blog['ID']; ?>">Read More</a>
                </div>

                <div class="blog-img col-md-4">
                    <img id="image" class="rounded" src="<?php echo $blog["Image_URL"] ?>" alt="">
                </div>
                </div>
            <?php endforeach;?>
        </div>

</section>
        <section>
            <a id="add" href="<?php echo ROOT_URL ?>PHP/BLOGPHP/add.php">Do you want to blog?</a>
        </section>
        <section class="newsletter" id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <form action="../newsletter.php" method="post" onsubmit="doSth(event)" auto_complete="off">
                            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                            <div class="input-group">
                                <input type="email" name="Email" class="form-control" placeholder="Enter your email">
                                <span class="input-group-btn">
                                    <button class="btn" value="Submit" name="submit" type="submit">Subscribe Now</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
<script>
$(document).ready(function() {
    var sortTitleButton = $("#sort-title-button");
    var sortDateButton = $("#sort-date-button");
    var sortAuthorButton = $("#sort-author-button");
    var resetButton = $("#reset-button");
    var blogContainer = $("#blog-container");
    var originalEntries = blogContainer.html();
    var ascendingTitleOrder = true;
    function sortEntriesByTitle() {
        var entries = blogContainer.find(".blog_entry");
        entries.sort(function(a, b) {
            var aTitle = $(a).find("h1").text().toUpperCase();
            var bTitle = $(b).find("h1").text().toUpperCase();
            if (ascendingTitleOrder) {
                return (aTitle < bTitle) ? -1 : (aTitle > bTitle) ? 1 : 0;
            } else {
                return (aTitle > bTitle) ? -1 : (aTitle < bTitle) ? 1 : 0;
            }
        });
        blogContainer.empty();
        entries.each(function() {
            blogContainer.append($(this));
        });
        ascendingTitleOrder = !ascendingTitleOrder;
    }

    var ascendingDateOrder = true;
    function sortEntriesByDate() {
        var entries = blogContainer.find(".blog_entry");
        entries.sort(function(a, b) {
            var aDate = $(a).find("p:first").text().substring(5);
            var bDate = $(b).find("p:first").text().substring(5);
            if (ascendingDateOrder) {
                return (aDate < bDate) ? -1 : (aDate > bDate) ? 1 : 0;
            } else {
                return (aDate > bDate) ? -1 : (aDate < bDate) ? 1 : 0;
            }
        });
        blogContainer.empty();
        entries.each(function() {
            blogContainer.append($(this));
        });
        ascendingDateOrder = !ascendingDateOrder;
    }

    var ascendingAuthorOrder = true;
    function sortEntriesByAuthor() {
        var entries = blogContainer.find(".blog_entry");
        entries.sort(function(a, b) {
            var aAuthor = $(a).find("h3").text().toUpperCase();
            var bAuthor = $(b).find("h3").text().toUpperCase();
            if (ascendingAuthorOrder) {
                return (aAuthor < bAuthor) ? -1 : (aAuthor > bAuthor) ? 1 : 0;
            } else {
                return (aAuthor > bAuthor) ? -1 : (aAuthor < bAuthor) ? 1 : 0;
            }
        });
        blogContainer.empty();
        entries.each(function() {
            blogContainer.append($(this));
        });
        ascendingAuthorOrder = !ascendingAuthorOrder;
    }

    function resetEntries() {
        blogContainer.html(originalEntries);
    }


    sortTitleButton.click(sortEntriesByTitle);
    sortDateButton.click(sortEntriesByDate);
    sortAuthorButton.click(sortEntriesByAuthor);
    resetButton.click(resetEntries);
});


</script>
</html>