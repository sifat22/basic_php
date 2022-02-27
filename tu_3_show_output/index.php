
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
        <h2>Php fundamental training</h2>
    </div>


     <?php 
     $a=5;
     echo $a;
    echo $fonts;
    
    ?>
    </br>
    <?php 
    $b=10;
    $c=$a+$b;
    echo "total value:",$c;
    echo "</br>";
    print $c;
    var_dump($fonts);///print data type
     ?>

    <div class="footer">
        <h2><a href="www.facebook.com">Facebook</a></h2>
    </div>


</section>
</body>
</html>