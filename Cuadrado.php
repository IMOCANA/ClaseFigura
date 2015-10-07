<?php
/**
 * Created by PhpStorm.
 * User: isamar
 * Date: 7/10/15
 * Time: 19:39
 */

namespace ClaseFigura;

require_once 'Figura.php';
require_once 'Punto.php';

class Cuadrado extends Figura
{
    /**
     * @var int
     */
    protected $_ancho;
    /**
     * @param Punto $origen
     * @param int   $ancho
     */
    function __construct(Punto $origen, $ancho)
    {
        parent::__construct($origen);
        $this->ancho = $ancho;
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
        return pow($this->ancho, 2);
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
        return $this->ancho * 4;
    }
    /**
     * escalar
     *
     * Description
     *
     * @param int $dx
     *
     */
    public function escalar($dx)
    {
        $this->ancho *= $dx / 100;
    }
    public function __toString()
    {
        $origenToString = parent::__toString();
        return 'Cuadrado[' . $origenToString . ', ' . $this->ancho . ']';
    }
}


