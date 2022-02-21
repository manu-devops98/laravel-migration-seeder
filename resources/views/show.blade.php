@extends('layout.base')

@section('documentTitle')
    Show
@endsection


@section('content')
    <div class="container">
        <div class="card">
            <h1>Agenzia: {{$train->agency}}</h1> 
            <h2>Partenza da: {{$train->departure}}</h2>
            <h2>Arrivo a: {{$train->arrival}}</h2>
            <h1>Orario partenza: {{$train->departure_time}}</h1>
            <h1>Orario arrivo: {{$train->arrival_time}}</h1>
            <h1>Codice viaggio: {{$train->code}}</h1>
            <h3>Numero carrozza: {{$train->carriage}}</h3>
            <h2>Data: {{$train->date}}</h2>
            <a href="{{ route('train.show', $train )}}">Acquista biglietto viaggio</a>
        </div>
@endsection