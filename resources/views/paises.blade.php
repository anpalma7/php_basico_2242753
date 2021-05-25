<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paises</title>
</head>
<body>
    <h1 class="text-center , text-primary">Lista de Paises</h1>
    <table class="table table-hover">
        <thead class="bg-primary">
            <tr>
                <th class="text-white">Nombre</th>
                <th class="text-white">Capital</th>
                <th class="text-white">Moneda</th>
                <th class="text-white">Población</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($naciones as $nombre => $nacion )
            <tr>
                <th>{{ $nombre }}</th>
                <th>{{ $nacion ["Capital"] }}</th>
                <th>{{ $nacion ["Moneda"] }}</th>
                <th>{{ $nacion ["Población"] }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
