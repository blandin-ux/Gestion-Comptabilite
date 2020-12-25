@extends('layouts.backoffice')
@section('titre')
Modification de {{$rubrique->name}}
@endsection
@section('corps')
<div class="container">
<form action="/rubriques/update" method="post" class="mt-4">
@csrf
<input type="hidden" name="id" value="{{$rubrique->id}}">
<h2 class="text-center">Modification de la rubrique</h2>
<div class="row mt-5">
    <div class="col-md-6">
        <label for=""> Désignation </label>
        <input type="text" name="name" id="" class="form-control" value="{{$rubrique->name}}" required>
    </div>
</div>
        <input type="submit" value="Valider" class="btn btn-success btn-lg mt-4">
    </form>
</div>
@endsection