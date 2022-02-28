
<?php 

$fonts="areal";
$name=$email=$web=$comment=$gender="";
$errname=$erremail =$errweb =$errcment =$errgender ="";
       
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['name'])){
        $errname="Name is required";
    }else{
        $name=validate ($_POST['name']);
    }
    if(empty($_POST['email'])){
        $erremail="Email is required";
    } elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
         $erremail="<span sttyle='color:red'>Invalid Email Format</span>"; 
    }
        else{
        $email=validate ($_POST['email']);
    }
    if(empty($_POST['web'])){
        $errweb="Website is required";
    }elseif(!filter_var($_POST["web"],FILTER_VALIDATE_URL)){
        $errweb="<span sttyle='color:red'>Invalid URL Format</span>"; 
   }
    
    else{
        $web=validate ($_POST['web']);
    }
     
    $comment=validate ($_POST['comment']);
    if(empty($_POST['gender'])){
        $errgender="Gender is required";
    }else{
        $gender=validate ($_POST['gender']);
    }
    


}

function validate($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);

    return $data;
}
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
        <h2>Php form and url validation</h2>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <table>


    <p style="color: red">* required field</p>
        <tr>
            <td>Name :</td>
            <td><input type="text" name="name"/>*<?php echo $errname; ?></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="email" name="email"/>*<?php echo $erremail; ?></td>
        </tr>
        <tr>
            <td>Website :</td>
            <td><input type="text" name="web"/>*<?php echo $errweb; ?></td>
        </tr>
        <tr>
            <td>Comment :</td>
            <td><textarea name="comment" rows="5" cols="30"></textarea></td>
        </tr>
        <tr>
            <td>Gender :</td>
            <td>
                <input type="radio" name="gender" value="Male"/>Male*<?php echo $errgender; ?>
                <input type="radio" name="gender" value="Female"/>Female
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="submit"/></td>
        </tr>
    </table>
    </form>

 <?php  
 
 
 
 
 ?>




</section>
</body>
</html>