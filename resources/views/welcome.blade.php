<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso jQuery: Getters & setters/title></title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <style type="text/css">
            .test
            {
                background: red;
            }
        </style>
        <script>
            $(document).ready(function(){

                $('#test').click(function(){
                    $(this).addClass('test');
                });
    
            });
            
        </script>

    </head>
    <body>
    </p>
    <div id="test">Hello jQuery</div>
    </body>
</html>
