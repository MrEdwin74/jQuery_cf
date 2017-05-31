<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso jQuery: Getters & setters/title></title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script>
            $(document).ready(function(){

                var store = $('#parrafo').html();
                alert(store);

                $('#test').attr('class','example');   // SET

                var clase = $('#test').attr('class'); // GET

                alert(clase);
    
            });
            
        </script>

    </head>
    <body>

    <p id="parrafo">
        <strong>Hello jQuery</strong>
    </p>
    <div id="test"></div>
    </body>
</html>
