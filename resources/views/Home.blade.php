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
    <link rel="stylesheet" href="{{ asset('css/body.css') }}">
</head>
<body>
    <nav class="d-flex flex-column align-items-center"> <!-- Usar flex para centrar -->
        <div class="menu text-center"> <!-- Centra contenido con text-center -->
            <a href="https://www.example.com">
                <img class="logo img-fluid" src="{{ asset('images/logoseinco.png') }}" alt="Descripción de la imagen">
            </a>
            <hr class="linea">
            <ul class="list-unstyled mt-4"> <!-- Sin estilo de lista -->
                <li>
                    <a href="#" class="text-white">Una de</a> <!-- Text-white para enlaces -->
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
