@extends('layouts.backoffice')
@section('titre')
Journal du mois de Novembre
@endsection
@section('corps')
@if(!$suivis->count())
<h2 class="text-center mt-5"> Aucun Journal disponible pour ce mois...! </h2>
@else
<div class="container">
<h2 class="text-center mb-3 mt-3">Journal des Opérations du mois de Novembre </h2>
<table class="table table-hover">
    <head>
        <tr>
            <th>Rubrique</th>
            <th>Libelé</th>
            <th>Produits</th>
            <th>Charges</th>
            <th>Dates des transactions</th>
        </tr>
    </head>
    <body>
        @foreach($suivis as $suivi)
        <tr>
            <td> {{$suivi->rubrique?$suivi->rubrique->name:"Aucune"}} </td>
            <td> {{$suivi->libele}} </td>
            <td> {{number_format($suivi->entree)}} Frcfa </td>
            <td> {{number_format($suivi->sortie)}} Frcfa </td>
            <td> {{$suivi->created_at->format('d M Y à H:i:s')}} </td>
        </tr>
        @endforeach
    </body>
<table class="table mt-4">
    <head>
        <tr>
            <th>Total Produits</th>
            <th>Total Charges</th>
            <th>Total des Produits-Charges</th>
        </tr>
    </head>
    <body>
        <tr>
            <td class="entree">{{number_format($suivis->sum('entree'))}} Frcfa</td>
            <td class="sortie">{{number_format($suivis->sum('sortie'))}} Frcfa</td>
            <td class="es">{{number_format(($suivis->sum('entree') + $suivis->sum('sortie')))}} Frcfa</td>
        </tr>
    </body>
</table>
</table>
</div>
{{$suivis->links()}}
@endif
@endsection