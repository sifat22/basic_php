
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
        <h2>Php svariable scope</h2>
    </div>

    <?php 

        $x=15;

        function test1(){
            global $x;
            $a=5;
            echo $a."<br/>";
            echo "access from test 1 "  .$x."<br/>";
        }
        function test2(){
            global $x;
            $b=10;
            echo "access from test 2 ".$x."<br/>";
            echo $b;
        }
        test1();
        test2();


    ?>


     
</section>
</body>
</html>