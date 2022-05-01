<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!--If laravel -->
    @if ($nombre == 'Ivan')
        {{'Eres el mejor'}}
    @else
        {{'Tienes que mejorar'}}
    @endif


    <!--Datos con PHP -->
    <h5>Hola <?php echo $nombre . ' ' . $apellido ?></h5>
    <!--Datos con blade Laravel -->
    <h5>Hola {{$nombre . ' ' . $apellido}}</h5>
    <!--Datos con blade Laravel con caracteres especiales -->
    <h5>Hola {!!$nombre . ' ' . $apellido!!}</h5>
</body>
</html>
