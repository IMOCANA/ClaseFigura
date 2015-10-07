<?php
/**
 * Created by PhpStorm.
 * User: isamar
 * Date: 7/10/15
 * Time: 19:15
 */

namespace ClaseFigura;


require_once 'Punto.php';
require_once 'Figura.php';

class Circulo extends Figura
{
    /**
     * @var int
     */
    private $radio;
    /**
     * @param Punto $origen
     * @param int   $radio
     */
    public function __construct(Punto $origen, $radio)
    {
        parent::__construct($origen);
        $this->radio   = $radio;
    }
    /**
     * area
     *
     * Circle area
     *
     * @return int
     */
    public function area()
    {
        return M_PI * pow($this->radio, 2);
    }
    /**
     * perimetro
     *
     * Perimetro de un cículo
     *
     * @return int
     */
    public function perimetro()
    {
        return 2 * M_PI * $this->radio;
    }
    /**
     * escalar
     *
     * Scales the circle
     *
     * @param int $dx
     */
    public function escalar($dx)
    {
        $this->radio *= $dx;
    }
    /**
     * toString
     *
     * Return a string representing the circle
     *
     * @return string
     */
    public function __toString()
    {
        $origenToString = parent::__toString();
        return 'Circulo[' . $origenToString . ', ' . $this->radio . ']';
    }
    /**
     * @return int
     */
    public function getRadio()
    {
        return $this->radio;
    }
    /**
     * @param int $radio
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;
    }
}

