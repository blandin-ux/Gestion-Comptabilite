@extends('layouts.backoffice')
@section('corps')
@section('titre')
Liste des rubriques
@endsection
<div class="container">
<h2 class="text-center">Gestion des rubriques</h2>
<table class="table table-bordered">
    <head>
        <tr>
            <th>Désignation</th>
            <th>Date de création</th>
            <th>Fonctions</th>
        </tr>
    </head>
    <body>
        @foreach($rubriques as $rubrique)
        <tr>
            <td> {{$rubrique->name}} </td>
            <td> {{$rubrique->created_at->format('d M Y à H:i:s')}} </td>
            <td> <a href="/rubriques/{{$rubrique->id}}/edit" class="btn btn-warning btn-sm"> Modifier </a> <a href="/rubriques/{{$rubrique->id}}/destroy" class="btn btn-danger btn-sm"> Supprimer </a></td>
        </tr>
        @endforeach
        
    </body>
</table>
<a href="/rubriques/create" class="btn btn-primary btn- float-left">Nouvelle Rubrique</a>
</div>
{{$rubriques->links()}}
@endsection