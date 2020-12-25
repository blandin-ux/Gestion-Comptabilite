@extends('layouts.backoffice')
@section('corps')

<div class="container">
<h2 class="text-center mb-4 mt-3">Rapport des Suivis</h2>
<table class="table table-hover table-bordered">
    <thead class="card-header thead-dark">
        <tr>
            <th>Libelé</th>
            <th>Rubrique</th>
            <th>Entrée</th>
            <th>Sortie</th>
            <th>Solde en Espèce</th>
            <th>Dates des transactions</th>
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
<a href="/suivis" class="btn btn-dark btn-lg float-left mb-4 ml-5">Retour</a>
</div>
{{$suivis->links()}}
@endsection