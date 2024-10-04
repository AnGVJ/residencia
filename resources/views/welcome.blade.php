<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Corregido -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    </head>
    <body>
       <div class="div1">
        <div class="div2">
        <img class="logo" src="{{ asset('images/logoseinco.png') }}" alt="Descripción de la imagen">
        <div>
            <h1 class="text-center h1 mt-5">BIENVENIDO A SEINCO!</h1>
            <h2 class="text-center mt-2 h2">Por Favor Inicie Sesión</h2>
        </div>
        <div class="div3 mt-5">
            <div class="input-group flex-nowrap">
                <span class="input-group-text text-white" id="addon-wrapping"><i class="bi bi-envelope"></i></span>
                <input type="text" class="form-control" placeholder="Ingrese Su Dirección De Correo Electrónico" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap mt-4">
                <span class="input-group-text text-white" id="addon-wrapping"><i class="bi bi-shield-lock"></i></span>
                <input type="text" class="form-control" placeholder="Ingrese Su Contraseña" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="d-flex justify-content-between align-items-center mt-5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">Mantener Sesión Abierta</label>
                </div>
                <div>
                    <a href="#" class="font">Olvidé Mi Contraseña</a>
                </div>
            </div>
            <button type="button" class="btn btn-outline-light btn-lg mt-5 fs-5 container">INICIAR SESIÓN</button>
        </div>
        </div>
       </div>
    </body>
</html>
