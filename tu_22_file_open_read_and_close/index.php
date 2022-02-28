
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
        <h2>Php File handeling</h2>
    </div>
    <div class="time">
        <?php 
        date_default_timezone_set('asia/dhaka');
        echo "time:  " .date("h:i:sa");
        ?>
    </div>
 

 <?php  
    
    $ourfile=fopen("text.txt","r") or die("FIle not found !");
    echo fread($ourfile,filesize("text.txt"));
    fclose($ourfile);


 
 ?>




</section>
</body>
</html>