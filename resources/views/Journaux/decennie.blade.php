@extends('layouts.backoffice')
@section('titre')
Journal par décennie
@endsection
@section('corps')
<style>
h5{
    font-family: fangsong;
    font-size: 15px;
    font-weight: 500;
    color: darkgreen;
    letter-spacing: 3px;
}
.div{
    padding-top: 150px;
}
h2{
    font-size: 40px;
}
</style>
    <div class="container-fluid div">
        <h2 class="text-center mt-5"> Cette fonctionnalité n'est pas disponible pour le moment </h2>
        <marquee behavior="slide" direction="up"> <h5 class="text-center mt-3">Pour plus d'information veuillez contacter le développeur <i class="fa fa-user"></i></h5> </marquee>
    </div>
@endsection