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

    <!--  in action noi inviamo questa richiesta di tipo GET al file PHP presente nel pattern -->
    <form class="m-4 container text-center mx-auto" action="./script.php" method="GET">
        <div>
            <label for="paragraph" class="m-4 form-label ">Scrivi un bel paragrafo &#128520; </label>
            <textarea class="m-4 w-50 mx-auto form-control" name="paragraph" id="paragraph" rows="3"></textarea>
        </div>

        <!--in entrambi gli input l'attributo NAME è importante per il backend, permette difatti di catturare il valore inserito dall'utente e gestirlo -->

        <div>

            <label for="word-censored" class="m-4 form-label text-center">Che parola vorresti censurare?</label>
            <input type="text" class="m-4 w-25 mx-auto form-control" name="word-censored" id="word-censored">
        </div>
        <button type="submit" class="m-4 btn btn-success">Submit</button>
    </form>

</body>

</html>