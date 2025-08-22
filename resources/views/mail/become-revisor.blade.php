<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Wood.it</title>
</head>
<body>
    <div>
        <h2>Un utente ha richiesto di diventare revisore</h2>
        <h4>Questi sono i suoi dati: </h4>
        <p>Utente: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Se vuoi accettare la richiesta, clicca qui</p>
        <a href="{{route('make.revisor', compact ('user')}}">Rendi revisore</a>
    </div>
</body>
</html>
