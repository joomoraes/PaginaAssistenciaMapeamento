<?php require_once("verifica.php"); ?>
<!DOCTYPE html>
<html>
        <head>
            <title>
                login
            </title>
            
            <meta charset="utf-8">
            <link href="login.css" rel="stylesheet">
            <link rel="icon" type="imagem/png" href="" />
            <meta name="mapScruture" content="HTML,CSS,XML,JavaScript">
            <meta name="JoaoPedro, Keniel, Elton, Nick" content="DevTeam">
            <meta name="develop assist map" content="map to uml ifmt structure">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
        </head>
    <body>
        <main>
            <div class="login">
                <h2>MAPEAMENTO</h2>
                <h2 class="ifmt">IFMT</h2>
                <form name="form1" method="post" action="verifica.php">
                    <input name="login" type="text" required name=login>
                    <input name="senha" type="password" required name=senha>
                    <input class="submit" type="submit" value="acesso">
                </form>
            </div>
        </main>
    </body>
</html>
