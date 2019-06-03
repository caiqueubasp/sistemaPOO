<?php
    if($_REQUEST){
        $pessoas = $_REQUEST['pessoa'];
    }else{
        header("Location:index.php?pessoas");
    }
    






?>

<h1>Olá <?php echo $pessoa->$nome ?> Seu cadastro foi concluido!</h1>