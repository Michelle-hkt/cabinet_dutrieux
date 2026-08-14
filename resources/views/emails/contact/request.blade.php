<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nouvelle requête</title>
</head>

<body>

    <h1>Nouvelle requête</h1>

    <p>
        Une nouvelle requête de la part de  <strong>{{ $data['firstname'] }} {{ $data['lastname'] }}</strong>.
    </p>

    <hr>

    <h2>Informations du demandeur</h2>

    <p>
        <strong>Nom :</strong>
        {{ $data['firstname'] }} {{ $data['lastname'] }}
    </p>

    <p>
        <strong>Email :</strong>
        {{ $data['email'] }}
    </p>

    @if (!empty($data['phone']))
        <p>
            <strong>Téléphone :</strong>
            {{ $data['phone'] }}
        </p>
    @endif

    <p>
        <strong>Objet :</strong>
        {{ $data['object'] }}
    </p>

    <h2>Message</h2>

    <p>
        {{ $data['message'] }}
    </p>

</body>

</html>