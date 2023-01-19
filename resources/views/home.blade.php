<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                @foreach ($trains as $train)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Stazione: {{ $train->departure_station }}</h5>
                        <h5 class="card-title">Partenza: {{ $train->departure_time }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Stazione di Arrivo: {{ $train->arrival_station }}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">Arrivo Previsto: {{ $train->arrival_time }}</h6>
                        <p class="card-text">Compagnia: {{ $train->company }}</p>
                        <p class="card-text">Stato: {{ $train->in_time }}</p>
                        <p class="card-text">Cancellato: {{ $train->cancelled }}</p>
                        <p class="card-text"></p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </main>

</body>

</html>
