<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
</head>
<body>
    <h1>Lista treni in partenza</h1>

    @foreach($trains as $train)
    <ul>
        <li><strong>Azienda:</strong> {{ $train->azienda }}</li>
        <li><strong>Stazione di partenza:</strong> {{ $train->stazione_partenza }}</li>
        <li><strong>Stazione di arrivo:</strong> {{ $train->stazione_arrivo }}</li>
        <li><strong>Orario di partenza:</strong> {{ $train->orario_partenza }}</li>
        <li><strong>Orario di arrivo:</strong> {{ $train->orario_arrivo }}</li>
        <li><strong>Codice treno:</strong> {{ $train->codice_treno }}</li>
        <li><strong>Totale carrozze:</strong> {{ $train->totale_carrozze }}</li>
        <li><strong>Stato:</strong> 
            @if($train->cancellato)
                Cancellato
            @elseif(!$train->in_orario)
                In ritardo
            @else
                In orario
            @endif
        </li>
    </ul>
    <hr>
    @endforeach
</body>
</html>