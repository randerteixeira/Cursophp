<?php
try {
    $pdo = new PDO("mysql:dbname=blog;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "erro" . $e->getMessage();
}
$total=0;
$sql="SELECT COUNT(*)as c FROM posts ";
$sql= $pdo->query($sql);
$sql->execute();
$sql=$sql->fetch();
$total=$sql['c'];
echo $total;
$paginas=$total/10;

$p=0;
$pg=1;
if(isset($_GET['p'])&&!empty($_GET['p'])){
    $pg=$_GET['p'];
}
$p=($pg-1)*10;
    


$sql="SELECT* FROM posts LIMIT $p,10 ";
$sql=$pdo->query($sql);
$sql->execute();

if($sql->rowCount()>0){

foreach($sql->fetchAll() as $new){
    echo "<br>".$new['id_posts'].$new['author']."<p>".$new['texto']."</p>";
}





}

echo"<hr>";
for($q=0;$q<$paginas;$q++){
echo'<a href="./?p='.($q+1).'">['.  ($q+1)   .']</a>';
}


