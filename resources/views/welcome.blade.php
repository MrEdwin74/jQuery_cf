<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso jQuery: Funciones</title>

    </head>
    <body>
        <script type="text/javascript">

            function factorial_1(num)
            {
                var fac =1;
                for (num;num>0;num--)
                    fac = fac * num;
                return fac;
            }

            var resultado = factorial_1(3);
            alert(resultado);

            var factorial_2 = function (num){
                var fac = 1;
                for(num;num>0;num--)
                    fac = fac * num;
                alert(fac)
            }

            factorial_2(5);

        </script>
    </body>
</html>
