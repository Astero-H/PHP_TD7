@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                      @foreach($series as $serie)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{$serie->poster_url}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="serie-name">{{$serie->name}} ({{$serie->year}}) </h5>
                                <p> Realisé par : <b>{{$serie->director}}</b></p>
                                <p class="serie-synopsys">{{$serie->synopsys}}</p>
                                <a href="{{route('editSerie',$serie->id)}}" class="btn btn-primary">Voir les détails</a>
                            </div>
                        </div>
                      @endforeach


                <a href="{{route('home')}}"> Retour à l'accueil </a>


        </div>
    </div>
@endsection
