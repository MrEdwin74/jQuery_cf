<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso jQuery: Arrays</title>

    </head>
    <body>
        <script type="text/javascript">

            var arreglo = new Array();

            arreglo.push(3);
            arreglo.push('hola mundo');
            arreglo[0] = 'Edwin';
            console.log(arreglo[0]);

            var arreglo1 = [1,2,'tres',4 ];
            console.log(arreglo1.length);

            var arreglo2 = [[1,2,3,],['a','b','c','d','e']];
            console.log(arreglo2[0].length);

            var cadena = arreglo2[1].join('');
            console.log(cadena);
            var arreglo3 = cadena.split('');
            console.log(arreglo3);

            var cadena1 = 'a-bc';
            var arreglo4 = cadena1.split('-');
            console.log(arreglo4[0]);
            console.log(arreglo4[1]);

        </script>
    </body>
</html>
