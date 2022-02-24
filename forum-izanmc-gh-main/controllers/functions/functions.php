<?php

    function checkCredUser($user,$pass){
        foreach ($_SESSION["users"] as $usuari){
            if ($usuari["user"]==$user){
                if ($usuari["pass"]===$pass){
                    return $usuari["user"];
                }
            }
        }
        return null;
    }

?>
