<?php

if(isset($_POST["media"])){

    $media = $_POST["media"];

    if($media <= 1.7){
        echo "Não pode realizar o exame.";
    }
    else if($media >= 7){
        echo "APROVADO!";
    }
    else{
       $ne = (50 - (6 * $media)) / 4;
echo "Precisa tirar " . $ne . " no exame.";
    }

}

?>
