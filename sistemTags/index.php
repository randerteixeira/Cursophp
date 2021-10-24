<?php
try{
$pdo= new PDO("mysql:dbname=projeto_tags;host=localhost","root","");
}catch(PDOException $e){
    echo"error".$e->getMessage();
    exit;
}
$sql ="SELECT caracteristicas FROM usuarios";
$sql = $pdo->query($sql);
if($sql->rowCount()>0){
$lista=$sql->fetchAll();
$carac=array();
foreach($lista as $usuario){
    $palavra=explode(",",$usuario['caracteristicas']);
    foreach($palavra as $palavra){
        $palavra=trim($palavra);
        if(isset($carac[$palavra])){
            $carac[$palavra]++;
        }else{
            $carac[$palavra]=1;
        }
    }
}
arsort($carac);
$palavras=array_keys($carac);
$contagem=array_values($carac);
$maior=max($contagem);
$tamanhos=array(11,15,20,30);
for ($i=0; $i< count($palavras)  ; $i++) {
$n = $contagem[$i] / $maior;
$h =ceil( $n * count($tamanhos));
echo"<p style='font-size:".$tamanhos[$h-1]."px'>".$palavras[$i]."(".$contagem[$i].")"."</p>";
    
}




}

?>
