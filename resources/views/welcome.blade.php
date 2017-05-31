<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso jQuery: Selectores second part/title></title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script>
            $(document).ready(function(){

                var seleccion = $('.ejem1');

                if(seleccion.length)
                    console.log('Existen: '+seleccion.length+' elementos de class ejem1 .')

                seleccion.not('.cl1').text('Este elemento no tiene la class cl1');

                seleccion.has('p').text('Este un elemento tipo parrafo');

                for(num=0;num<4;num++)
                    $('li').eq(num).text('Soy el elemento numero '+num);
    
            });
            
        </script>

    </head>
    <body>
        <div class="ejem1 cl1">
            <p></p>
        </div>

        <div class="ejem1">
            <span></span>
        </div>

        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </body>
</html>
