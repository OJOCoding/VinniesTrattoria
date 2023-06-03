<!-- FINAL PROJECT BY ONI LUCA 20200008, READ PROJECT REPORT FOR MORE INFORMATION. -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cousine:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
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

      .middle-line {
        height: 200px;
        width: 2px;
        background: #fff;
        margin: 40px auto;
      }

      .buttons {
        display: flex;
        width: 50%;
        gap: 5vw;
        margin: auto 30%;
      }

      .home-content button {
        display: block;
        font-size: 20px;
        border: 1px solid #f1f1f1;
        border-radius: 5px;
        background: transparent;
        color: #fff;
        margin: 50px auto 0;
        padding: 16px 30px;
        cursor: pointer;
      }
    </style>
    <title>Vinnie's Trattoria</title>
  </head>

  <body>
    <div class="home">
      <video autoplay muted loop>
        <source src="images/video.mp4" type="video/mp4" />
      </video>
      <div class="home-content">
        <h1>Vinnie's Trattoria</h1>
        <div class="middle-line"></div>
        <div class="buttons">
          <form>
            <button formaction="HTML/home.html">DISCOVER ABOUT US</button>
          </form>
          <form>
            <button formaction="PHP/ADMIN/admin.php">
              ADMIN LOG IN PAGE
            </button>
          </form>
        </div>
      </div>
    </div>
    <div class="overlay"></div>
  </body>
  <script>
  $(document).ready(function () {

$.ajax({
  url: "DBCREATE/dbcreate.php",
  type: "POST",
  success: function (response) {
    $("#result").html(response);
  },
  error: function (jqXHR, textStatus, errorThrown) {
    $("#result").html("Error: " + textStatus + " - " + errorThrown);
  },
});
});
  </script>
</html>
