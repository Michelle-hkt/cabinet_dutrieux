<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Requête reçus</title>
</head>

<body>

    <h1>Votre requête a bien été reçue</h1>

    <p>
        Bonjour {{ $data['firstname'] }} {{ $data['lastname'] }},
    </p>

    <p>
        Nous vous confirmons que votre message a bien été reçue
        par le Cabinet Dutrieux.
    </p>

    <p>
        Notre équipe en prendra connaissance et
        reviendra vers vous dans les meilleurs délais.
    </p>


    <p>
        Cordialement,<br>
        <strong>Le Cabinet Dutrieux</strong>
    </p>

</body>

</html>