<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/styles.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div id="main">
      <div id="first">
        <h3>You Code</h3>
        <h2>I Code</h2>
        <h1>We Code</h1>
      </div>
      <div id="at"><h1>@</h1></div>
      <div id="circle">
       <img src="images/logo.png" alt="logo">
      </div>
     <div id="time">
      <?php
       date_default_timezone_set("Africa/Lagos");
       echo "<p>" .date("h:i a"). "</p>";
      
      ?>
     </div>
    </div>

    


</body>
</html>