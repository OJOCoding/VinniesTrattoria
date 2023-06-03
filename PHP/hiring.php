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
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../CSS/general.css" />
    <script src="../JavaScript/phpheader.js"></script>
    <title>Vinnie's Trattoria</title>
    <script>
        function doSth(i){
            if(!confirm("Thank you for your appliication. You will be contacted shortly! Press Ok to continue!")) {
                return false;
            }
            this.form.submit();
        }
    </script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">

    <style>
        html,
        body {
            max-width: 100%;
            padding: 0;
            margin: 0;
        }

        body {
            background-image: url("../images/hiring_img.jpg");
            background-repeat: no-repeat;
            background-size: 100vw 60vw;
            background-attachment: fixed;
        }
        .form {
            background-color: rgba(251, 250, 241, 0.75);
            height: 33.5vw;
            width: 45vw;
            position: absolute;
            top: 10vw;
            left: 5vw;
            border-radius: 15px;
            padding-top: 2vw;
            text-align:center;


        }
    .form h1{
        color: #383127;
        font-size: 1.5vw;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        margin-top: 2.5vw;
    }
    .form h2{
        color: #383127;
        font-size: 1.5vw;
        font-weight: 700;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        margin-top: 2.5vw;
    }
    .form p{
            font-weight: 400;
            font-size: 1.25vw;
            line-height: 25px;
            color: #383127;
            text-decoration: none;
            letter-spacing: 0.1em;
            margin-right: 1vw;
            margin-right: 2.8vw;
    }
  
.dropzone {
  border: 2px dashed #ccc;
  text-align: center;
  padding: 50px;
  cursor: pointer;
  width: 40vw;
}

.dropzone.hover {
  background-color: #f5f5f5;
}

.dropzone .glyphicon {
  font-size: 50px;
  margin-bottom: 10px;
  color: #ccc;
}
.well{
    width: 43vw;
}
.navbar-collapse.collapse {
    display: flex!important;
}

    </style>

</head>

<body>
    <main>
    <div class="form">
    <h1>WANT TO JOIN THE TEAM?</h1>
    <h2>Apply Now!</h2>
    <p>Upload your CV below in a PDF file format labeled in this fashion "Name_LastName.pdf"</p>
    <div class="container w-30">
      <div id="file-upload" class="well">
        <form id="upload-form" action="JOBFILE/add_file.php" method="POST" enctype="multipart/form-data" onsubmit="doSth(event)">
        <input id="file-input" type="file" name="uploaded_file" multiple style="display: inline-block;">
<button type="submit" style="display: inline-block;">Submit</button>
        </form>
        <div class="dropzone">
          <span class="glyphicon glyphicon-cloud-upload"></span>
          <h3>Drag and drop files here</h3>
        </div>
      </div>
    </div>
  </div>
    </main>
    <footer
      class="text-center text-white fixed-bottom"
      style="background-color: #a10412"
    >
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 CS 306: SPRING I PROJECT SUBMISSION BY
        <a class="text-white" href="../HTML/cedits.html">ONI LUCA</a>
      </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script>
$(document).ready(function() {
  var dropzone = $('.dropzone');

  dropzone.on('dragover', function() {
    dropzone.addClass('hover');
    return false;
  });

  dropzone.on('dragleave', function() {
    dropzone.removeClass('hover');
    return false;
  });

  dropzone.on('drop', function(e) {
    e.preventDefault();
    dropzone.removeClass('hover');

    var files = e.originalEvent.dataTransfer.files;
    $('#file-input')[0].files = files;

    $.ajax({
      url: 'JOBFILE/add_file.php',
      type: 'POST',
      data: new FormData($('#upload-form')[0]),
      cache: false,
      contentType: false,
      processData: false,
      success: function(response) {
      },
      error: function(jqXHR, textStatus, errorThrown) {
      }
    });
  });
});
  </script>
</html>
