<?php

//prendo la parola vietata usabdo GET
$badword = $_GET['badword'];

//Creo una variabile con una frase
$paragraph = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores eos consequatur numquam dolorem expedita totam ad aut cumque ullam eum nihil, voluptatum obcaecati in. Porro vero sequi architecto sit veritatis!";

//Sostituisco la stringa amet con i tre ***
$paragraph = str_replace($badword, "***", $paragraph);

//Salvo il numero di caratteri del paragrafo
$para_len = strlen($paragraph);

?>

<!-- Stampo gli output -->
<p>Numero di caratteri del paragrafo: <?php echo $para_len;?>
<p>Il paragrafo è: <?php echo $paragraph;?></p>