<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="d-flex gap-5 container flex-wrap pt-5 justify-content-center">


        @foreach ($trains as $items)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">{{ $items->company }}</h4>
                    <p class="card-text"><b>Partenza:</b> {{ $items->departure_station }}</p>
                    <p class="card-text"><b>Arrivo:</b> {{ $items->arrival_station }}</p>
                    <p class="card-text"><b>Data e ora di partenza:</b> {{ $items->departure_time }}</p>
                    <p class="card-text"><b>Data e ora di arrivo:</b> {{ $items->arrival_time}}</p>
                    <p class="card-text"><b>Codice treno:</b> {{ $items->train_code}}</p>
                </div>
            </div>
        @endforeach

        {{-- @foreach ($trains as $items)
            @if($items->in_time == 1)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title">{{ $items->company }}</h4>
                        <p class="card-text">Partenza: {{ $items->departure_station }}</p>
                        <p class="card-text">Arrivo: {{ $items->arrival_station }}</p>
                        <p class="card-text">Data e ora di partenza: {{ $items->departure_time }}</p>
                        <p class="card-text">Data e ora di arrivo: {{ $items->arrival_time}}</p>
                        <p class="card-text">Codice treno: {{ $items->train_code}}</p>
                    </div>
                </div>
            @endif
        @endforeach --}}
    </div>
</body>
</html>
