<?php 

    function removerImagem($path){
        if(unlink($path)){
            return true;
        }
        return false;
    }

 
?>
