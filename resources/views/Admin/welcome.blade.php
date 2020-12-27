<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('fonts/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style1.css')}}">
        <title>Espace Administrateur</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/v4-shims.css">
        <style>
            html, body {
                background-color: black;
                color: floralwhite;
                font-family: 'Nunito', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 74px;
                letter-spacing: 7px;
            }

            .links > a {
                color: grey;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > a:hover{
                color: white;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #btn>a{
                color: white;
                text-decoration:none;
            }
            #text{
                animation-name: text;
                animation-duration: 3s;
                animation-delay: 1;   
                font-size: 58px;             

            } 

            @keyframes text{
    0%{
        color: black;
        margin-bottom: -40px;
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: -40px;
        font-weight: 200;
    }
    85%{
        letter-spacing: 8px;
        margin-bottom: -40;
    }
    100%{
        color: snow;
        
    }
}
    #divp{
        padding-left: 150px;
    }

    </style>
    </head>
        <div class="float-right">
          <a class="btn btn-danger mr-3 mt-3" id="pos"  href="/deconnexion">Déconnexion <i class="fa fa-sign-out"></i></a> 
        </div>         

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content" id="divp"> 
                <div class="title m-b-md" id="text">
                    Bienvenue Mr {{Auth::user()->name}}
                </div>

                <div class="links">
                    <a href="/suivis">Suivis Comptable</a>
                    <a href=""></a>
                    <a href="journal/mois">Journaux</a>
                    <a href=""></a>
                    <a href="/rubriques">Gestion des rubriques</a>
                    <a href=""></a>                    
                </div>
            </div>
        </div>
    </body>
</html>