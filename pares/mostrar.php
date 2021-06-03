<?php 
    if(isset($_POST['numero'])){
        $num=intval($_POST['numero']);
        if ($num!== ""){
            $value = "";
        } 
        if ($num%2==0){ 
            $value = 1;
        } else {
            $value = 0;
        }
    }
    header("Location: ./index.php?confirm=".$value);
    ?>