<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loging</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form class="box" action="logoin.php" method="get">
        <h1> Abdullah Al-arwi Page</h1>
        <div> User Name <input type="text" name="userName" placeholder=" Email or Phone " </div><br>

            <div> Password <input type="password" name="password" placeholder="passowrd"></div><br>

            <div> <button type="submit"> submit</button> </div>

    </form>




    <?php
   $newPassword = $_GET["password"];
   $userName = $_GET["userName"];
   $oldPassord =222;

if($newPassword ==$oldPassord){
    echo "مرحبا بك  $userName";
}elseif 
($newPassword == null) {
echo " من فظلك ادخل البينات ناقصه";
}
else{
    echo "خطا في كلمة المرور ";
}


?>

</body>

</html>