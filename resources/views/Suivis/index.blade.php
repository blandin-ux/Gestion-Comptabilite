@extends('layouts.backoffice')
@section('titre')
Suivi de toutes les Opérations en cours
@endsection
@section('corps')

<div class="container-fluid">
<div class="mb-4 mt-4">
    <h2 class="text-center mb-3">Suivis des Opérations en Cours...!</h2>
    <h6> <marquee behavior="slide" direction="" class="text-center">Ceci est le suivi de toutes les opérations en cours à compter de l'année 2021 jusqu'aux années futures.</marquee> </h6>
</div>
<table class="table table-hover table-striped table-bordered">
    <thead class="card-header thead-dark">
        <tr>
            <th>Libelé</th>
            <th>Rubrique</th>
            <th>Entrée</th>
            <th>Sortie</th>
            <th>Solde en Espèce</th>
            <th>Dates des transactions</th>
            <th>Fonction</th>
        </tr>
    </thead> 
    <tbody class="card-body">
        @foreach($suivis as $suivi)
        <tr>
            <td> {{$suivi->libele}} </td>
            <td> {{$suivi->rubrique?$suivi->rubrique->name:"Aucune"}} </td>
            <td> {{number_format($suivi->entree)}} Frcfa </td>
            <td> {{number_format($suivi->sortie)}} Frcfa </td>
            <td> 
                @if($suivi->sortie > $suivi->entree)
                    {{number_format(($suivi->sortie - $suivi->entree))}} Frcfa 
                    @else
                    {{number_format(($suivi->entree - $suivi->sortie))}} Frcfa
                @endif                    
            </td>
            <td> {{$suivi->created_at->format('d M Y à H:i:s')}} </td>
            <td> <a href="/suivis/edit/{{$suivi->id}}" class="btn btn-warning btn-sm">Modifier</a> </td>
        </tr>
        @endforeach
    </tbody>
<table class="table mt-4">
    <head>
        <tr>
            <th>Total Entrée</th>
            <th>Total Sortie</th>
            <th>Total des Entrées-Sorties</th>
        </tr>
    </head>
    <body>
        <tr>
            <td class="entree"> <marquee behavior="slide" direction="up">{{number_format($suivis->sum('entree'))}} Frcfa</marquee> </td>
            <td class="sortie"> <marquee behavior="slide" direction="down"> {{number_format($suivis->sum('sortie'))}} Frcfa </marquee> </td>
            <td class="es"> <marquee behavior="slide" direction="up">{{number_format(($suivis->sum('entree') + $suivis->sum('sortie')))}} Frcfa</marquee> </td>
        </tr>
    </body>
</table>
</table>
<a href="/suivis/create" class="btn btn-primary btn- float-left ml-5">Nouveau</a>
<a href="/suivis/rapport" class="btn btn-success btn- float-left ml-2 mr-2">Rapport de suivis</a>
</div>
{{$suivis->links()}}
@endsection