<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
    @vite('resources/js/app.js')
</head>

<body>
    <main class="container">
        <h1>Treni in partenza:</h1>

        @if (count($trains) > 0)
            <ul>
                @foreach ($trains as $train)
                    <li>
                        <h6>Azienda: {{ $train['azienda'] }}</h6>
                        <h6>Stazione di Partenza: {{ $train['stazione_partenza'] }}</h6>
                        <h6>Stazione di Arrivo: {{ $train['stazione_arrivo'] }}</h6>
                        <h6>Data Partenza: {{ $train['data_partenza'] }}</h6>
                        <h6>Orario Partenza: {{ $train['orario_partenza'] }}</h6>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Nessun treno in partenza.</p>
        @endif
    </main>
</body>

</html>
