@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Nombre de séries disponibles : {{$countSeries}}<br>
                        <a href=" {{route('listSeries')}}"> Consulter la liste des séries</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
