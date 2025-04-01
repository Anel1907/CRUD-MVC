<?php
class Celulares
{
    var $marca;
    var $modelo;
    var $color;
    var $precio;
    var $plan;

    function __construct($miMarca, $miModelo, $miColor, $miPrecio, $miPlan)
    {
        $this->marca = $miMarca;
        $this->modelo = $miModelo;
        $this->color = $miColor;
        $this->precio = $miPrecio;
        $this->plan = $miPlan;
    }
}
?>