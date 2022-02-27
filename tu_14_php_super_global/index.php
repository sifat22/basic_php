
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
        <h2>Php super golabal scope scope[$GLOBALS &$_SERVER]</h2>
    </div>
    <h1>
        $GLOBALS
        $_SERVER
        $_REQUEST
        $_POST
        $_GET
        $_FILE
        $_ENV
        $_COOKIE
        $_SESSION

    </h1>
    <hr/>
    Topic:$GLOBAL
    <hr/>

    <?php 

    $x=5;
    $y=10;
    function sum(){
        $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];

    }
    sum();
    echo $z; 

      
    ?>

<hr/>
    Topic:$_SERVER
    <hr/>

    <?php 

    echo $_SERVER['PHP_SELF'];
    echo "<br/>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br/>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br/>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br/>";
    echo $_SERVER['SERVER_ADDR'];

      
    ?>


     
</section>
</body>
</html>