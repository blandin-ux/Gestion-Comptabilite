@extends('layouts.backoffice')
@section('titre')
Effectuer une Opération
@endsection
@section('corps')
<div class="container">
<form action="/suivis" method="post" class="mt-4">
@csrf
<h2 class="text-center"> Nouvelle Opération</h2>
<div class="row mt-5">
    <div class="col-md-4">
        <select name="rubrique_id" id="" class="form-control" required>
            <option value="">Rubrique</option>
            @foreach($rubriques as $rubrique)
            <option value="{{$rubrique->id}}"> {{$rubrique->name}} </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-4">
        <input type="text" name="libele" id="" class="form-control" placeholder="Entrer le libelé..." required>
    </div>
    <div class="col-md-4">
        <input type="number" name="entree" id="" class="form-control" placeholder="Entrée..." >
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-4">
        <input type="number" name="sortie" id="" class="form-control" placeholder="Sortie..." >
    </div>
</div>
        <input type="submit" value="Valider" class="btn btn-success btn-lg mt-4">
    </form>
</div>
@endsection