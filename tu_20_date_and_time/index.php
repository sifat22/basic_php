
<?php 

$fonts="areal";

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>php syntax</title>
<style>
    .php-coding{width: 900px; margin:0 auto;background: 
    #ddd;padding: 20px;min-height: 400px;}
    .header-option, .footer{background: #444;color: #fff;
    text-align: center;
    padding: 20px;}
</style>
</head>
<body>
<section class="php-coding">
    <div class="header-option">
        <h2>Php dat and time</h2>
    </div>
 

 <?php  
 
      echo  date("Y/m/d")."<br/>";
      echo  date("l")."<br/>";
      echo  date("h:i:sa")."<br/>";

      date_default_timezone_set('asia/dhaka');
      echo "Banggladesh time is". date("h:i:sa")."<br/>";

        echo date_default_timezone_get();
 
 ?>




</section>
</body>
</html>