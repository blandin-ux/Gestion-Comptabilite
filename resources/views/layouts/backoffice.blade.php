<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">

    <title>
      @yield('titre')
    </title>


    <!-- Bootstrap core CSS -->

<link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/monstyle.css')}}">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
.entree{
    font-weight: 600;
    font-size: 30px;
    font-family: cursive;
    color: darkgreen;
}
.sortie{
    font-weight: 600;
    font-size: 30px;
    font-family: cursive;
    color: darkred;
}
.es{
    font-weight: 600;
    font-size: 30px;
    font-family: cursive;
    color: dodgerblue;
}
.monnav{
  height:80px;
  
}
.shadow{
  box-shadow: 0 0.5rem 1rem rgba(28, 5, 23, 16.15) 
}
h2{
    font-family: cursive;
    font-size: 40px;
    letter-spacing: 3px;
    font-weight:900;
    color:royalblue;
}
h6{
    background: linear-gradient(0deg, royalblue, black);
    color: white;
    font-family: cursive;
    letter-spacing: 3px;
    font-weight:900;

}
thead{
  box-shadow: 0px 0px 5px 1px black;
}
    </style>
    <!-- Custom styles for this template -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>

    <!--
    <link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.css')}}">-->
    <!-- Bootstrap, Js et Font-awesom en ligne-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/v4-shims.css">

  </head>
  
  <body>

    <nav class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow monnav">
      <h3 class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" >Gestion de la copmtabilité</h3>
      <ul class="navbar-nav px-3 shadow">
        <li class="nav-item text-nowrap">
          <a class="nav-link mr-3" href="/deconnexion"> {{auth::user()->name}} <i class="fa fa-sign-out"></i> </a>
        </li>
      </ul>
    </nav>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
        
        <li class="nav-item">
            <a class="nav-link" href="/suivis">
              <span data-feather="file"></span>
                Suivis des Opérations <i class="fa fa-home"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/suivis/compte">
              <span data-feather="file"></span>
                Compte de résultas <i class=""></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="/journal/mois">
              <span data-feather="home"></span>
              Journal Par Mois  <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/journal/trimestre">
              <span data-feather="file"></span>
              Journal Par Trimestre 
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/journal/semestre">
              <span data-feather="file"></span>
              Journal Par Semestre 
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/journal/ans">
              <span data-feather="file"></span>
              Journal Par Ans 
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/journal/decennie">
              <span data-feather="file"></span>
              Journal Par Décennie 
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/">
              <span data-feather="file"></span>
              Date : {{date('d M Y ')}}
            </a>
          </li>
          
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">

          <div class="btn-control mr-2">
            <a herf=""class="btn btn-sm btn-outline-success"><i class="fa fa-whatsapp"></i></a>
            <a herf=""class="btn btn-sm btn-outline-secondary"><i class="fa fa-github"></i></a>
            <a href=""class="btn btn-sm btn-outline-primary"><i class="fa fa-facebook"></i></a>
            <a href=""class="btn btn-sm btn-outline-info"><i class="fa fa-twitter"></i></a>
            <a href=""class="btn btn-sm btn-outline-danger"><i class="fa fa-youtube"></i></a>            
          </div>

        </div>
      </div>

        <div>
          @yield('corps')
        </div>

      </div>
    </main>
  </div>
</div>

</html>
