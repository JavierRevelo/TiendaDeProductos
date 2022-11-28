<?php
$recordarme=false;
$usuario="";
$password="";
$leng=1;
if(isset($_COOKIE["c_recordarme"]) && $_COOKIE["c_recordarme"]!=""){
    $recordarme=true;
    $usuario=isset($_COOKIE["c_usuario"])?$_COOKIE["c_usuario"]:"";
    $password=isset($_COOKIE["c_password"])?$_COOKIE["c_password"]:"";
    $_COOKIE["c_leng"]=isset($_COOKIE["c_leng"])?$_COOKIE["c_leng"]:1;

}

?>

<!DOCTYPE html>
<html>
    <head>
        <h1>
            Login
        </h1><br>
        <form method="POST" action="pagina.php" >
        <fieldset>
            Usuario: <br>
            <input type="text" name="usuario" value="<?php echo $usuario;?>"/><br>
            Clave: <br>
            <input type="password" name="password" value="<?php echo $password; ?>"/><br> 
            <input type="checkbox" name="chkrecordarme" <?php echo ($recordarme)?"checked":""; ?>>Recordar mis datos 
            <br>
            <input type="submit" value="Enviar">
        </fieldset>
        </form>
        
        
    </head>



</html>