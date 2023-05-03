<?php

$paragraph = $_GET["paragraph"];  // Prendo il valore del paragrafo inserito dall'utente(quello a destra) e lo salvo in una variabile (a sx)
$word = $_GET["word-censored"];  // Prendo il valore della parola inserita dall'utente(quella a destra) e lo salvo in una variabile (a sx)
$censored = "***";              // Creo una variabile con gli asterischi che sostituiranno la parola inserita dall'utente

$paragraph_censored = str_replace($word, $censored, $paragraph);      // Sostituisco la parola inserita dall'utente con gli asterischi nel paragrafo

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/style.css">

    <title>BAD WORDS &#128520;</title>
</head>

<body>

    <div class="wrapper text-center m-4">

        <h2 class="my-4">Il testo originale è : </h2>
        <p class="my-4">
            <?php
            echo $paragraph;
            ?><br>
            <span class="my-5 spazio">
                <?php
                echo "Il paragrafo è lungo : " . strlen($paragraph) . " caratteri";
                ?>
            </span>
        </p>
        <h2 class="my-4">Il testo censurato è : </h2>
        <p class="my-4">
            <?php
            echo $paragraph_censored;

            ?> <br>
            <span class="spazio">
                <?php
                echo "Il nuovo paragrafo è lungo: " . strlen($paragraph_censored) . " caratteri";
                ?>
            </span>
        </p>
    </div>


    <!-- PROVE FOR FUN PER INTEGRARE ALTRE COSE PER PROVARE E TESTARE -->

    <div class="text-center my-5">

        <button onclick="showAlert()" class="btn btn-warning"> Clicca qui &#128520;</button>
    </div>

    <!-- Provo una funzione che al click, con delay 2 secondi, ti riporta alla pagina iniziale di prova -->

    <script>
        function showAlert() {
            alert("Ottimo hai censurato le parolacce, clicca OK per ricominciare da capo");
            setInterval(function() {
                window.location.href = "http://localhost:8888/Boolean%20Server%20Fake/php-badwords/";
            }, 2000);
        }
    </script>

</body>

</html>