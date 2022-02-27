
<?php 

$fonts="areal";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>php syntax</title>

</head>
<body>
<section class="php-coding">
    <div class="header-option">
        <h2>Php super golabal scope scope[$_POST &$_REQUEST]</h2>
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
    Topic:$_REQUEST
    <hr/>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
    <hr/>
    Topic:$_POST
    <hr/>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>




     
</section>
</body>
</html>