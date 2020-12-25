@extends('layouts.backoffice')
@section('titre')
Journaux des mois 
@endsection
@section('corps')
<div class="container">    
    <h2 class="text-center">Cliquer sur le mois concerné afin de voir son Journal </h2>
    <div class="row mt-2 mt-5 mb-2">
        <div class="col-md-2">
            <a href="/journal/mois/janvier" class="btn btn-primary btn-lg col-md-12">Janvier</a>
        </div>
        <div class="col-md-2">
            <a href="/journal/mois/fevrier" class="btn btn-primary btn-lg col-md-12">Févrirer</a>    
        </div>
        <div class="col-md-2">
             <a href="/journal/mois/mars" class="btn btn-dark btn-lg col-md-12">Mars</a>        
        </div>
        <div class="col-md-2">
            <a href="/journal/mois/avril" class="btn btn-danger btn-lg col-md-12">Avril</a>    
        </div>
        <div class="col-md-2">
            <a href="/journal/mois/mai" class="btn btn-success btn-lg col-md-12">Mai</a>    
        </div>
        <div class="col-md-2">
            <a href="/journal/mois/juin" class="btn btn-success btn-lg col-md-12">Juin</a>        
        </div>
    </div>
    <div class="row mt-2 mb-2">
        <div class="col-md-2">
            <a href="/journal/mois/juillet" class="btn btn-primary btn-lg col-md-12">Juillet</a>        
        </div>
        <div class="col-md-2">
            <a href="/journal/mois/aout" class="btn btn-danger btn-lg col-md-12">Août</a>    
        </div>
        <div class="col-md-2">
             <a href="/journal/mois/septembre" class="btn btn-dark btn-lg col-md-12">Septembre</a>        
        </div>
        <div class="col-md-2">
            <a href="/journal/mois/octobre" class="btn btn-dark btn-lg col-md-12">Octobre</a>    
        </div>
        <div class="col-md-2">
            <a href="/journal/mois/novembre" class="btn btn-success btn-lg col-md-12">Novembre</a>    
        </div>
        <div class="col-md-2">
            <a href="/journal/mois/decembre" class="btn btn-danger btn-lg col-md-12">Décembre</a>        
        </div>
    </div>
</div>
@endsection