<?php
    if($_REQUEST){
        $pessoa = $_REQUEST['pessoa'];
    }else{
        header("Location:index.php?pessoas");
    }
    

?>

<h1>Olá <?php echo $pessoa->getNome(); ?> Seu cadastro foi concluido!</h1>