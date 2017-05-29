<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso jQuery: Primeros pasos en jQuery</title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script>
            
            $(document).ready(function(){
                $('#prueba').text('hola mundo');
                $('.prueba').html('<strong>Estoy usando jQuery</strong>');
            });

        </script>

    </head>
    <body>
        <div id="prueba">
            
        </div>
        <div class="prueba">
            
        </div>

    </body>
</html>
