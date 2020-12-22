<?php

//prendo la parola vietata usabdo GET
$badword = $_GET['badword'];

//Creo una variabile con una frase
$paragraph = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores eos consequatur numquam dolorem expedita totam ad aut cumque ullam eum nihil, voluptatum obcaecati in. Porro vero sequi architecto sit veritatis!";

echo '<h1>PRE ELABORAZIONE</h1>';

echo '<p>'. $paragraph . '</p>';
$para_len = strlen($paragraph);
echo '<p>Numero caratteri prima: '. $para_len . '</p>';

//Sostituisco la stringa amet con i tre ***
$paragraph = str_replace($badword, "***", $paragraph);

//Salvo il numero di caratteri del paragrafo
$para_len = strlen($paragraph);

?>

<!-- Stampo gli output -->

<h1>POST ELABORAZIONE</h1>
<p>Il paragrafo è diventato: <?php echo $paragraph;?></p>
<p>Numero di caratteri del paragrafo dopo: <?php echo $para_len;?>