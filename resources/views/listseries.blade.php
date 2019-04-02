@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @if( $countSeries == 0)
                <h1 class="display-3">Nothing for you here ...</h1>
            @endif

            <div class="col-md-12">
                      @foreach($series as $serie)
                        <div class="card" style="width: 15rem;">
                            <img class="card-img-top" src="{{$serie->poster_url}}" height="250" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="serie-name">{{$serie->name}} ({{$serie->year}}) </h5>
                                <p> Realisé par : <b>{{$serie->director}}</b></p>
                                <p class="serie-synopsys">{{$serie->synopsys}}</p>
                                <a href="{{route('editSerie',$serie->id)}}" class="btn btn-primary">Voir les détails</a>

                                <a href="{{route('deleteSerie',$serie->id)}}" onclick="return confirm('Etes-vous absolument certain ? (sans rire)')" class="btn btn-primary">Supprimer</a>
                            </div>
                        </div>
                      @endforeach
            </div>

                <a class="btn btn-info" href="{{route('home')}}"> Retour à l'accueil </a>

        </div>
    </div>

@endsection


<style>

    .col-md-12 {
        flex: 0 0 100%;
        max-width: 100%;
        display: flex;
        justify-content: flex-start;
    }

    .card{
        margin-right: 5%;
    }


</style>