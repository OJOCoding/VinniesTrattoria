<?php
  require "../../DBMS/db.php";
  $query = "SELECT * FROM `reviews`";
  $result = mysqli_query($conn,$query);
  $reviews = mysqli_fetch_all($result,MYSQLI_ASSOC);
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


.review_pattern {
  background-image: url("../../images/review_pattern.jpg");
  background-repeat: repeat-x;
  height: 20vw;
  background-size: 20vw 20vw;
  width: 100vw;
}

.review_pattern h1 {
  margin-top: 23vw;
  position: absolute;
  margin-left: 28.5vw;
  color: #383127;
  font-size: 1.5vw;
  font-weight: 700;
  letter-spacing: 0.15em;

}

#second-part {
  margin-top: 4vw;
  width: 100%;
  text-align: center;
  color: #383127;
}

#second-part h1 {
  font-size: 1.5vw;
  font-weight: 700;
  letter-spacing: 0.5rem;
}
#second-part a{  
  text-decoration: none;
  color:#383731;
}

#second-part h2 {
  font-size: 1.25vw;
  font-weight: 500;
  letter-spacing: 0.25rem;
}

.socials {
  margin: 2.5vw 25vw;
  width: 50%;
  display: flex;
  justify-content: space-evenly;
}

.socials img {
  width: 3vw;
  aspect-ratio: 1/1;
}

#change{
  font-size: 1.2vw;
  font-weight: 500;
  font-style:italic;
  letter-spacing: 0.1rem;
  text-decoration: none;
  color:#383731;
}
.review-short-description {
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
  text-overflow: ellipsis;
}
.carousel{
 width: 75vw;
 margin: 7.5vw auto;
}
.cards-wrapper {
  display: flex;
  justify-content: center;
}
.card img {
  max-width: 100%;
  max-height: 100%;
}
.card {
  width: 20vw;
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  border-radius: 0;
}
.carousel-inner {
  padding: 1em;
}
.carousel-control-prev,
.carousel-control-next {
  background-color: #e1e1e1;
  width: 5vh;
  height: 5vh;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}
@media (min-width: 768px) {
  .card img {
    height: 11em;
  }
}


    </style>
</head>

<body>
    <div class="review_pattern ">
        <h1>HERE IS WHY PEOPLE COME BACK FOR MORE</h1>
</div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php 
    $chunks = array_chunk($reviews, 3); 
    foreach($chunks as $key => $chunk): ?>
      <div class="carousel-item<?php if ($key === 0) echo ' active'; ?>">
        <div class="cards-wrapper">
          <?php foreach($chunk as $review): ?>
            <div class="card">
              <img src="<?php echo $review["Image_URL"] ?>"  class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="costumer"><?php echo $review["Name"]?></h2>
                <p class="review-short-description"><?php echo $review["Review"] ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <section id="second-part">
        <a href="add_review.php"><h1>LEAVE US A REVIEW </h1></a><br><br>
        <a href="userlogin.php"><p id="change">DID WE CHANGE YOUR MIND?</p></a><br>

        <h2>~ Write about us on review sites, social medias or send us a message below ~</h2>
        <div class="socials">
            <a href="https://google.com/"><img src="../../images/social_logos/googlelogo.webp" alt=""></a>
            <a href="https://www.facebook.com/"><img src="../../images/social_logos/facebooklogo.png" alt=""></a>
            <a href="https://www.instagram.com/"><img src="../../images/social_logos/instagramlogo.png" alt=""></a>
            <a href="https://www.twitter.com/"><img src="../../images/social_logos/twitterlogo.png" alt=""></a>
            <a href="https://www.tripadvisor.com/"><img src="../../images/social_logos/tripadvisorlogo.png" alt=""></a>
        </div>
    </section>
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
  $(document).ready(function(){
    $('#carouselExampleControls').carousel({
      interval: false,
      wrap: false
    });

    $('#carouselExampleControls').on('slid.bs.carousel', function () {
      var visibleCardIndex = $('.carousel-item.active .card').first().index();
      if (visibleCardIndex > 0) {
        $('.carousel-control-prev').show();
      } else {
        $('.carousel-control-prev').show();
      }
      if (visibleCardIndex + 2 < $('.carousel-item.active .card').length) {
        $('.carousel-control-next').show();
      } else if ($('.carousel-item.active').next('.carousel-item').length > 0) {
        $('.carousel-control-next').show();
      } else {
        $('.carousel-control-next').show();
      }
    });

    if ($('.carousel-item.active .card').first().index() === 0) {
      $('.carousel-control-prev').show();
    }
  });
</script>
<script>$(document).ready(function(){
  $('#change').hover(function(){
    $(this).css('color', 'red');
    $(this).css('font-size', '20px');
  }, function(){
    $(this).css('color', '');
    $(this).css('font-size', '');
  });
});</script>

</html>