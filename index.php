<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <title>BAD WORDS</title>
</head>

<body>

    <form action="script.php" method="GET">
        <div >
            <label for="paragraph" class="form-label">Paragrafo</label>
            <textarea class="form-control" name="paragraph" id="paragraph" rows="3"></textarea>
        </div>
        <div >
            <label for="word" class="form-label">Parola da censurare</label>
            <input type="text" class="form-control" name="word" id="word">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>


</body>

</html>