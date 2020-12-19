@extends('layouts.backoffice')
@section('titre')
Modification de l'opération {{$suivi->id}}
@endsection
@section('corps')
<div class="container">
<form action="/suivis/update" method="post" class="mt-4">
@csrf
<input type="hidden" name="id" value="{{$suivi->id}}">
<h2 class="text-center"> Modification de l'opération</h2>
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
        <input type="text" name="libele" id="" class="form-control" placeholder="Entrer le libelé..." value="{{$suivi->libele}}" required>
    </div>
    <div class="col-md-4">
        <input type="number" name="entree" id="" class="form-control" placeholder="Entrée..." value="{{$suivi->entree}}">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-4">
        <input type="number" name="sortie" id="" class="form-control" placeholder="Sortie..." value="{{$suivi->sortie}}">
    </div>
</div>
        <input type="submit" value="Modifier" class="btn btn-success btn-lg mt-4">
    </form>
</div>
@endsection