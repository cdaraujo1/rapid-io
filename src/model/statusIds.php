<?php

function getDetailOfStatusCode($i)
{
    global $statusId;
    
    switch ($i) {
        case 0:
        $statusId = "0 - Coletado";
        break;
        case 1:
        $statusId = "1 - Armazenado";
            break;
        case 2:
        $statusId = "2 - Em Transito";
            break;
        case 3:
        $statusId = "3 - Entregue";
            break;
    }

}

?>