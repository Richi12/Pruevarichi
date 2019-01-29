<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Generadores</title>
        <link rel="shortcut icon" href="php-big1.png">
        <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous">
        </script>
    </head>
    <body>
        <form id="formAdd" data-url="controlador/decode_url.php">
            <input name="url" id="url" placeholder="verificar cambios"><br>
            <button id="enviar" type="button">Enviar</button>
        </form>
        <div id="resp">
            
        </div>
    </body>
    <script>
        $('#enviar').click(function(){
            var url = $('#url').val();
            $.post($('#formAdd').data('url'),
                {'url':url},
                function(resp){
                    $('#resp').html(resp);
                }
            );
        });
    </script>
</html>
