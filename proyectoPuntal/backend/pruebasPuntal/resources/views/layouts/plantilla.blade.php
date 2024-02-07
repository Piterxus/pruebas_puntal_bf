<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1 border  navL">
                <img src="{{asset('/images/layout/logo.svg') }}" alt="Portos de Galicia Logo" class="logoLatNav m-3">


                <ul class="nav flex-column  justify-content-center mt-5">

                    <li class="nav-item my-4">
                        <a class="btn control border rounded" aria-current="page" href="#">PANEL DE CONTROL</a>
                    </li>
                    <li class="nav-item my-4">
                        <a class="btn emb rounded" href="#">GESTIÓN DE EMBARCACIONES</a>
                    </li>
                    <li class="nav-item my-4">
                        <a class="btn tran rounded" href="#">GESTIÓN DE TRÁNSITOS</a>
                    </li>
                    <li class="nav-item my-4">
                        <a class="btn plaza rounded" href="#" tabindex="-1">GESTIÓN DE PLAZAS BASE</a>
                    </li>
                </ul>

            </div>
            <div class="col-md-11 border right">
                <div class="row">
                    <nav class="navbar navbar-expand-sm  navbar-dark test1 d-flex justify-content-end">
                        <div class="d-flex  justify-content-center">
                            <h3>¡Hola Pedro!</h3>
                            <a class="navbar-brand" (click)="goToNotifications()">
                                <img src="{{asset('/images/layout/nots.svg')}}" alt="Notification icon" style="width:40px;" class="rounded-pill notIcon">
                            </a>
                            <a class="navbar-brand" href="#">
                                <img src="{{asset('/images/layout/user.svg')}}" alt="User icon" style="width:40px;" class="rounded-pill userIcon">
                            </a>
                            <a class="navbar-brand" (click)="logout()">
                                <img src="{{asset('/images/layout/logout.svg')}}" alt="Logout icon" style="width:40px;" class="rounded-pill logoutIcon">
                            </a>
                        </div>
                    </nav>

                    <div id="content" class="contentClass ">
                        @yield('contenido')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>