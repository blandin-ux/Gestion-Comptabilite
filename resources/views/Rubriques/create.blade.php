@extends('layouts.backoffice')
@section('titre')
Création des rubriques
@endsection
@section('corps')
<div class="container">
<form action="/rubriques" method="post" class="mt-4">
@csrf
<h2 class="text-center">Ajouter une nouvelle rubrique</h2>
<div class="row mt-5">
    <div class="col-md-6">
        <label for=""> Désignation </label>
        <input type="text" name="name" id="" class="form-control" required>
    </div>
</div>
        <input type="submit" value="Valider" class="btn btn-success btn-lg mt-4">
    </form>
</div>
@endsection