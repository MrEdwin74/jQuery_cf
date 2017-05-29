<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso jQuery: Objetos</title>

    </head>
    <body>
        <script type="text/javascript">

            var Gato = new gato("bola");

            function gato(nombre)
            {
                this.nombre = nombre;
                this.maulla = function(){
                    alert('MI');
                };
            }

            alert("El nombre de el gato es: "+Gato.nombre);
            Gato.maulla();

        </script>
    </body>
</html>
