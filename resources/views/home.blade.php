@extends('layout.base')

@section('documentTitle')
    Home
@endsection
@section('content')
    <div class="container">
        @foreach ($train as $itemTrain)
        <div class="card">
            <h1>Agenzia: {{$itemTrain->agency}}</h1> 
            <h2>Partenza da: {{$itemTrain->departure}}</h2>
            <h2>Arrivo a: {{$itemTrain->arrival}}</h2>
            <h1>Orario partenza: {{$itemTrain->departure_time}}</h1>
            <h1>Orario arrivo: {{$itemTrain->arrival_time}}</h1>
            <h1>Codice viaggio: {{$itemTrain->code}}</h1>
            <h3>Numero carrozza: {{$itemTrain->carriage}}</h3>
            <h2>Data: {{$itemTrain->date}}</h2>
            <a href="{{ route('train.show', $itemTrain )}}">Info biglietto viaggio</a>
        </div>
        @endforeach
        {{ $train->links()}}
    </div>
@endsection