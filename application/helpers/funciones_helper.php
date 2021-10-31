<?php

function formatearFecha($fecha) 
{
    /* 2021-06-18 19:10:56 */
    $dia=substr($fecha,8,2);
    $mes=substr($fecha,5,2);
    $anio=substr($fecha,0,4);    

    $fechaformateada=$dia."/".$mes."/".$anio;
    return $fechaformateada;
}

function estado($est)
{
    if($est=0)
    {
        $estado="INACTIVO";
    }
    else
    {
        $estado="ACTIVO";
    }
    return $estado;

}

?>