@extends('layouts.backoffice')
@section('titre')
Compte de résultas
@endsection
@section('corps')
<style>
.produit{
    font-weight: 500;
    letter-spacing: 1px;
    color: darkred;
}
.charge{
    font-weight: 500;
    letter-spacing: 1px;
    color: darkcyan;
}
.pc{
    font-weight: 500;
    letter-spacing: 1px;
    color: darkred;
}
.b{
    font-weight: 900;
    font-size: 20px;
}
.card{
    background-color: ;
    color: ;
}
.card153{
    background-color: antiquewhite;
    color: ;
}
.card246{
    background-color: lightcyan;
}
h5{
    font-family: ui-monospace;
    letter-spacing: 1px;
    font-size: 30px;
    font-weight: 500;
    text-shadow: 1px -1px 1px black;
    color: royalblue;
}
body{
    background: repeating-linear-gradient(50deg, lightblue, transparent 100px);
}
h2{
    font-family: cursive;
    font-size: 35px;
    letter-spacing: 3px;
    font-weight: 900;
    color: royalblue;
    letter-spacing:4px;
    text-shadow: 1px 1px 2px black;
}
.variation{
    font-family: cursive;
    font-size: 25px;
    letter-spacing: 2px;
    font-weight: 500;
    color: black;
    letter-spacing:4px;
    text-shadow: 1px 1px 2px black;
}
input{
      
}
.output{
    font-size: 30px;
    font-family: cursive;
    font-weight: 900;
    color: black;  
}
.select{
    font-weight: bold;
    color: black;
    font-family: cursive;
    text-shadow: 1px 1px 2px black;
}
</style>
<div class="container-fluid mb-5">
    <h2 class="text-center mb-5">Compte des résultats de tous les mois</h2>
    <div class="row mb-2">
        <div class="col-md-4">
            <div class="card p-4 card153">
                <h5 class="text-center">Janvier</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($janvier->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($janvier->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($janvier->sum('entree') + $janvier->sum('sortie')))}} Frcfa</b>
            </div>
        </div>    
        <div class="col-md-4">
            <div class="card p-4 card246">
                <h5 class="text-center">Février</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($fevrier->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($fevrier->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($fevrier->sum('entree') + $fevrier->sum('sortie')))}} Frcfa</b>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 card153">
                <h5 class="text-center">Mars</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($mars->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($mars->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($mars->sum('entree') + $mars->sum('sortie')))}} Frcfa</b>
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-md-4">
            <div class="card p-4 card246">
                <h5 class="text-center">Avril</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($avril->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($avril->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($avril->sum('entree') + $avril->sum('sortie')))}} Frcfa</b>
            </div>
        </div> 
        <div class="col-md-4">
            <div class="card p-4 card153">
                <h5 class="text-center">Mai</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($mai->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($mai->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($mai->sum('entree') + $mai->sum('sortie')))}} Frcfa</b>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 card246">
                <h5 class="text-center">Juin</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($juin->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($juin->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($juin->sum('entree') + $juin->sum('sortie')))}} Frcfa</b>
            </div>
        </div>
    </div>    
    <div class="row mb-2">
        <div class="col-md-4">
            <div class="card p-4 card153">
                <h5 class="text-center"> Juillet</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($juillet->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($juillet->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($juillet->sum('entree') + $juillet->sum('sortie')))}} Frcfa</b>
            </div>
        </div>    
        <div class="col-md-4">
            <div class="card p-4 card246">
                <h5 class="text-center">Août</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($aout->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($aout->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($aout->sum('entree') + $aout->sum('sortie')))}} Frcfa</b>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 card153">
                <h5 class="text-center">Septembre</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($septembre->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($septembre->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($septembre->sum('entree') + $septembre->sum('sortie')))}} Frcfa</b>

            </div>
        </div>
    </div>
    <div class="row mb-2">
        <ddiv class="col-md-4">
            <div class="card p-4 card246">
                <h5 class="text-center">Octobre</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($octobre->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($octobre->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($octobre->sum('entree') + $octobre->sum('sortie')))}} Frcfa</b>
            </div>
        </ddiv>            
        <div class="col-md-4">
            <div class="card p-4 card153">
                <h5 class="text-center">Novembre</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($novembre->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($novembre->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($novembre->sum('entree') + $novembre->sum('sortie')))}} Frcfa</b>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card p-4 card246">
                <h5 class="text-center">Décembre</h5>
                <label for="" class="produit">Total Produits</label>                
                <b class="ml-4 b"> {{number_format($decembre->sum('entree'))}} Frcfa </b>
                <label for="" class="charge">Total Charges</label>
                <b class="ml-4 b"> {{number_format($decembre->sum('sortie'))}} Frcfa </b>
                <label for="" class="pc">Total Produits & Charges </label>
                <b class="b ml-4">{{number_format(($decembre->sum('entree') + $decembre->sum('sortie')))}} Frcfa</b>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <form action="" method="get" class="">
            <h5 class="variation">Variation en Mois</h5>
            <div class="row">
                <div class="col-md-6">
                    <label> Chiffre d'affaire du mois précédent </label>
                    <select name="mp" id="" class="form-control select">
                        <option value="">...</option>
                        <option value="{{$janvier->sum('entree') + $janvier->sum('sortie')}}">Janvier</option>
                        <option value="{{$fevrier->sum('entree') + $fevrier->sum('sortie')}}">Février</option>
                        <option value="{{$mars->sum('entree') + $mars->sum('sortie')}}">Mars</option>
                        <option value="{{$avril->sum('entree') + $avril->sum('sortie')}}">Avril</option>
                        <option value="{{$mai->sum('entree') + $mai->sum('sortie')}}">Mai</option>
                        <option value="{{$juin->sum('entree') + $juin->sum('sortie')}}">Juin</option>
                        <option value="{{$juillet->sum('entree') + $juillet->sum('sortie')}}">Juillet</option>
                        <option value="{{$aout->sum('entree') + $aout->sum('sortie')}}">Août</option>
                        <option value="{{$septembre->sum('entree') + $septembre->sum('sortie')}}">Septembre</option>
                        <option value="{{$octobre->sum('entree') + $octobre->sum('sortie')}}">Octobre</option>
                        <option value="{{$novembre->sum('entree') + $novembre->sum('sortie')}}">Novembre</option>
                        <option value="{{$decembre->sum('entree') + $decembre->sum('sortie')}}">Décembre</option>
                    </select>
                </div>
                <div class="col-md-6">
                <label> Chiffre d'affaire du mois actuel </label>
                <select name="ma" id="" class="form-control select">
                        <option value="">...</option>
                        <option value="{{$janvier->sum('entree') + $janvier->sum('sortie')}}">Janvier</option>
                        <option value="{{$fevrier->sum('entree') + $fevrier->sum('sortie')}}">Février</option>
                        <option value="{{$mars->sum('entree') + $mars->sum('sortie')}}">Mars</option>
                        <option value="{{$avril->sum('entree') + $avril->sum('sortie')}}">Avril</option>
                        <option value="{{$mai->sum('entree') + $mai->sum('sortie')}}">Mai</option>
                        <option value="{{$juin->sum('entree') + $juin->sum('sortie')}}">Juin</option>
                        <option value="{{$juillet->sum('entree') + $juillet->sum('sortie')}}">Juillet</option>
                        <option value="{{$aout->sum('entree') + $aout->sum('sortie')}}">Août</option>
                        <option value="{{$septembre->sum('entree') + $septembre->sum('sortie')}}">Septembre</option>
                        <option value="{{$octobre->sum('entree') + $octobre->sum('sortie')}}">Octobre</option>
                        <option value="{{$novembre->sum('entree') + $novembre->sum('sortie')}}">Novembre</option>
                        <option value="{{$decembre->sum('entree') + $decembre->sum('sortie')}}">Décembre</option>
                </select>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-6">

                </div>
                <div class="col-md-4">
                <label for="">Résultats</label>
                <output class="form-control output"> 
                    @if (request()->mp > request()->ma) 
                       {{ number_format((((request()->mp) - (request()->ma))*2)/100) }} Frcfa
                    @else 
                        {{ number_format((((request()->ma) - (request()->mp))*2)/100) }} Frcfa
                    @endif 
                 </output>
                </div>
            </div> 
            <input type="submit" class="btn btn-success mt-4 btn-lg col-md-2" value="Calculer">
        </form>
    </div> 
</div>
@endsection