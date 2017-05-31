<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso jQuery: Selectores first part/title></title>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script>
            $(document).ready(function(){
                $('div.minDiv').css({
                    'background-color':'#000',
                    'opacity': 1,
                    'color': 'red',
                });

                $('div.yourDiv article').css({
                    'background-color':'#000',
                    'opacity': 1,
                    'color': 'red',
                });

                $('div.yourDiv article p').text('Your selector');

                $('#Parrafo1, #Parrafo2, span').text('Commond text');
    
            });
            
        </script>

    </head>
    <body>
        <div class="minDiv">
            <article>
                <p>Hello jQuery</p>
            </article>
        </div>
        <div class="yourDiv">
            <article>Min selector
                <p></p>
            </article>
        </div>
        
        <div>
            <article>Min selector
                <p id="Parrafo1"></p>
                <p id="Parrafo2"></p>
                <span></span>
            </article>
        </div>
    </body>
</html>
