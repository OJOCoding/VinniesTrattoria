<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cousine:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Vinnie's Trattoria</title>
    <script src="../../JavaScript/phpheadernest.js"></script>
    <link rel="stylesheet" href="../../CSS/general.css">
    <style>
      header{
        position: fixed;

top: 0;
      }
      html,
      body {
        max-width: 100%;
        overflow-x: hidden;
        padding: 0;
        margin: 0;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        background-color: #fbfaf1;
        width: 100vw;
      }
      .menu-banner {
        margin-top:5vw;
        height: 30vw;
        width: 100vw;
        background-repeat: no-repeat;
        background-image: url("../../images/menu-banner.jpg");
        background-size: cover;
      }

      .menu-banner h1 {
        font-weight: 700;
        font-size: 2vw;
        letter-spacing: 0.3em;
        color: #fbfaf1;
        padding-top: 3vw;
        padding-left: 55vw;
        margin-right:1vw;

      }

      .menu-banner p {
        font-weight: 400;
        letter-spacing: 0.1em;
        line-height: 2vw;
        font-size: 1.5vw;
        color: #fbfaf1;
        padding-left: 62vw;
        margin-right:2vw;
        text-align: end;
      }

      .button {
        padding: 0.75vw 1.5vw;
        border-radius: 45px;
        background-color: #fbfaf1;
        color: #383127;
        cursor: pointer;
        text-transform: uppercase;
        font-weight: 40;
        position: relative;
        text-decoration: none;
        font-size: 1.5vw;
        margin-left: 75.5vw;
      }

      .top-page {
        margin-left: 90vw;
       
      }

      .up-img {
        height: 3vw;
        margin-bottom:5vw;
        transform: rotate(-90deg);
      }

      h2 {
			text-align: center;
			font-weight: bold;
			margin-top: 30px;
			margin-bottom: 10px;
		}
		.menu-item {
			margin-bottom: 30px;
			text-align: center;

		}
		.menu-item h3 {
			font-size: 24px;
			margin-bottom: 10px;
		}
		.menu-item h3 span {
			font-size: 18px;
		}
		.menu-item p {
			font-style: italic;
			margin-bottom: 0;
		}

      #secret {
        font-style: italic;
        text-decoration: none;
        color: #383127;
      }
      #myHeading{
        font-style: italic;
      }
      #search-input {
  border-radius: 20px; 
  text-align: center;
  margin: 1vw auto;
  display: block;
  
}

    </style>
  </head>
  <body>
    <main>
      <div class="menu-banner">
        <h1>TRADIONAL ITALIAN DISHES</h1>
        <p>
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.”
        </p>
        <a name=top></a>
        <a class="button" href="../../HTML/delivery.html">WANT TO ORDER INSTEAD?</a>
      </div>
    </main>

    <input type="text" id="search-input" class="w-25 form-control" placeholder="KNOW WHAT TO ORDER?">

		<div id="menu-items">
			<?php include 'menuitems.php';?>
		</div>
    <a name="top"></a>
    <h2 id="myHeading">
    Want to know <a id="myLink" href="#">a secret</a>
  </h2>
  <div id="myDiv" style="display:none;">
<div class="menu-item">
  <h3>Pineapple Pizza 0 €</h3>
<p>È una pizza dal gusto dolce e leggermente esotico, che può essere apprezzata da chi ama sperimentare sapori diversi.</p>
</div></div>
  
    <a class="top-page" href="#top"
      ><img class="up-img" src="../../images/up.png" alt=""
    />
  </a>

    <footer
      class="text-center text-white "
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
			$("#search-input").on("keyup", function() {
				var searchTerm = $(this).val().toLowerCase();
				$.ajax({
					url: "search.php",
					type: "GET",
					data: { searchTerm: searchTerm },
					success: function(response) {
						$("#menu-items").html(response);
					}
				});
			});
		});
	</script>
  <script>
    const link = document.getElementById('myLink');
    const div = document.getElementById('myDiv');
    const heading = document.getElementById('myHeading');
    
    link.addEventListener('click', function(event) {
      event.preventDefault(); 
      if (div.style.display === 'none') {
        div.style.display = 'block';
        link.innerHTML = 'secret'; 
        heading.firstChild.textContent = 'Hide the ';
        heading.appendChild(link);
      } else {
        div.style.display = 'none';
        link.innerHTML = 'a secret'; 
        heading.firstChild.textContent = 'Want to know ';
        heading.appendChild(link);
      }
    });
  </script>
</body>
</html>


