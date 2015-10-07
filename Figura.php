<?php
/**
 * Created by PhpStorm.
 * User: isamar
 * Date: 6/10/15
 * Time: 15:58
 */

namespace ClaseFigura;

require_once 'Punto.php';


abstract class Figura
{
    /**
     * @var Punto
     */
    protected $origen;
    /**
     * @var int
     */
    private static $numFiguras = 0;
    /**
     * @param Punto $_origen
     */
    function __construct(Punto $origen)
    {
        self::$numFiguras++;
        $this->origen = $origen;
    }
    public static function  getNumFiguras()
    {
        return self::$numFiguras;
    }

    abstract public function area();

    abstract public function perimetro();

    abstract public function escalar($dx);

    public function desplazar($dx, $dy)
    {
        $this->origen->desplazar($dx, $dy);
    }

    public function getOrigen()
    {
        return $this->origen;
    }

    public function setOrigen($origen)
    {
        $this->origen = $origen;
    }
    /**
     * toString
     *
     * Description
     *
     * @return string
     */
    public function __toString()
    {
        return $this->origen->__toString();
    }
    public function distancia(Figura $f)
    {
        return $this->origen->distancia($f->getOrigen());
    }
}


