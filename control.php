<?php

if(isset($_GET)){
$esp=1;
$eng=0;
    if($_GET["lenguaje"]==1){
        setcookie("c_leng",$esp,time()+3600);

    }else{
        setcookie("c_leng",$eng,time()+3600);
        
    }
}

header("Location: pagina.php");



?>