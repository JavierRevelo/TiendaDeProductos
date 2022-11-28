<?php
session_start();
    if(isset($_POST["usuario"])&& isset($_POST["password"])){
        $_SESSION["s_usuario"]=$_POST["usuario"];
        $_SESSION["s_password"]=$_POST["password"];
    }
    
    if(!isset($_SESSION["s_usuario"]) && !isset($_SESSION["s_password"])){  
        header("Location: index.php");
    }
    
    $usuario=$_SESSION["s_usuario"];
    $password=$_SESSION["s_password"];
    $recordarme=(isset($_POST["chkrecordarme"]))?$_POST["chkrecordarme"]:"";
    $leng=(isset($_COOKIE["c_leng"]))?$_COOKIE["c_leng"]:1;



if($recordarme!=""){
    setcookie("c_usuario",$usuario,time()+3600);
    setcookie("c_password",$password,time()+3600);
    setcookie("c_recordarme",$recordarme,time()+3600);
    setcookie("c_leng",$leng,time()+3600);
}


if(!isset($_POST["chkrecordarme"]) ) {
    if($_GET["chk"]==""){
        setcookie("c_usuario","");
    setcookie("c_password","");
    setcookie("c_recordarme","");
    setcookie("c_leng","");
    }

    
}





if($leng==0){
    $fp = fopen("categorias_en.txt", "r");
}else{
    $fp = fopen("categorias_es.txt", "r");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <h1>Panel Principal</h1>
    </head>
    <body>
        <h3>Bienvenido Usuario: <?php echo $usuario; ?></h3><br>
        <a href="control.php?lenguaje=1">ES/(Español)</a>
        <a href="control.php?lenguaje=0">ENG/(English)</a><br>
        <br>
        <a href="cerrarsesion.php">Cerrar Sesion</a><br>
        <h2>Product List</h2>
        <p><?php
        while(!feof ($fp)){
        $cadena = fgets($fp )." \n ";
        echo $cadena;
        echo "<br>";
        }
        fclose($fp);
        ?></p>
    </body>
    <br>
    
</html>