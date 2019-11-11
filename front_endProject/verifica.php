<?php
    if(isset($_POST['login']) ) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if (($login == 'devfront') && ($senha == '123')) { 
            $_SESSION['ok1'] = 'permitido';
            header("location:_acesso/index.html");
        }

        elseif (($login == 'ana') && ($senha == '456')) {
            $_SESSION['ok1'] = 'permitido';
            header("location: _acesso/index.html");
        }

        else {
                header("location:script.html");
            } 
            
        }
?>