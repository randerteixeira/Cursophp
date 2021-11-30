<?php
 $ver=$_GET['ver'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>img{
        width: 500px;
        height: 500px;
    }</style>
</head>
<body>
<img src="<?php echo $ver ?>" alt="">
<a href="#" download="<?php echo $ver  ?>">baixar</a> <a href="index.php">sair</a>
    
</body>
</html>
