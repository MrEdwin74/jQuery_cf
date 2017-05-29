<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso jQuery: Condicionales</title>

    </head>
    <body>
        <script type="text/javascript">
            
            
            var edad = 17;
            if(edad >18)
                alert('Eres mayor de 18 anos');
            else if(edad<18)
                alert('Eres menor de edad');
            else
                alert('Tienes 18 anos')
            

            
            var aux = false;

            var asignada = aux?'hola':'adios';

            alert(asignada);
            

            var a =3;

            switch(a)
            {
                case 0:
                    alert('a = 0')
                    break;
                case 1:
                    alert('a = 1')
                    break;
                default:
                    alert('a = ?')
                break;
            }

        </script>
    </body>
</html>
