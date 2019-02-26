<!DOCTYPE html>
<html>
<head>

  <title>web application</title>
<!-- //for including bootstrap -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



  <style type="text/css">

 /*//style for container class division*/
            .container{background-color: #00c853;position:absolute;width:500px;top:50%;left:50%;height:400px;transform: translate(-50%, -50%);border-radius: 5%;}

 /*//style for logout division*/
             #logout{position: absolute;left:80%;top:10%;}
         

 /*//style for footer*/
              footer {position: absolute;
              background-color: #555;top:88%;
              color: white;
              padding: 20px;width:100%;
               }
  </style>


</head>
<body>


<?php
?>


<h1><center><b>welcome</b></center></h1>
  <div id="logout">
  <input type="button" value="logout" onclick="window.location.href='logout1.php'" class="btn btn-primary">
  </div>

  <div class="container">
  <p><br>Hai,<br><BR>This is a simple web application.<br>
    You can login with username:0 and password:1 <br>
    I think i really tried to include oops concepts for validation
  </p>
  </div>

  <footer class="container-fluid">
  <p><center>all rights are reserved to geo@php</center></p>
  </footer>

</body>
</html>