<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo')</title>

    <link href="/css/app.css" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
    <style>
        .full-height {
            height: 40vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }
    </style>
</head>

<body>

<header>
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
            <h5 class="text-white h4">Sistema Contatos</h5>
            <span class="text-muted">Teste  Dev Jr - Instituto FlexPeak</span>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffff;" href="{{ route('admin.login.sair') }}">Sair</a>
                </li>
            </ul>
        </nav>
    </div>
</header>