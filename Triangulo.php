<?php
/**
 * Created by PhpStorm.
 * User: isamar
 * Date: 7/10/15
 * Time: 19:32
 */

namespace ClaseFigura;

require_once 'Punto.php';
require_once 'Figura.php';

class Triangulo extends Figura
{
    /**
     * @var int
     */
    private $base;
    /**
     * @var int
     */
    private $altura;
    /**
     * @param int $altura
     * @param int $base
     * @param Punto $origen
     */
    function __construct($altura, $base, Punto $origen)
    {
        parent::__construct($origen);
        $this->altura  = $altura;
        $this->base    = $base;
    }
    /**
     * @return int
     */
    public function getAltura()
    {
        return $this->altura;
    }
    /**
     * @param int $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }
    /**
     * @return int
     */
    public function getBase()
    {
        return $this->base;
    }
    /**
     * @param int $base
     */
    public function setBase($base)
    {
        $this->base = $base;
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
        $origenToString = parent::__toString();
        return 'Triangulo[' . $origenToString . ', ' . $this->base . ', ' . $this->altura . ']';
    }
    /**
     * area
     *
     * Description
     *
     * @return mixed
     */
    public function area()
    {
        return $this->base * $this->altura / 2;
    }
    /**
     * perimetro
     *
     * Description
     *
     * @return mixed
     */
    public function perimetro()
    {
        return sqrt(pow($this->altura, 2) + pow($this->base / 2, 2)) * 2 + $this->base;
    }
    /**
     * escalar
     *
     * Description
     *
     * @param int $dx
     */
    public function escalar($dx)
    {
        $this->base    *= $dx / 100;
        $this->altura  *= $dx / 100;
    }
}
