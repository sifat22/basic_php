
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
    $x=10;
    if($x>15){
        echo "Trainig with live project";
    }else{
        echo "correct";
    }

    ?>

    
</section>
</body>
</html>