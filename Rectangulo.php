<?php
/**
 * Created by PhpStorm.
 * User: isamar
 * Date: 7/10/15
 * Time: 19:43
 */

namespace ClaseFigura;


require_once 'Cuadrado.php';
require_once 'Punto.php';

class Rectangulo extends Cuadrado
{
    /**
     * @var int
     */
    private $alto;
    /**
     * @param Punto $origen
     * @param int   $ancho
     * @param int   $alto
     */
    public function __construct(Punto $origen, $ancho, $alto)
    {
        parent::__construct($origen, $ancho);
        $this->alto = $alto;
    }
    /**
     * area
     *
     * Description
     *
     * @return int
     */
    public function area()
    {
        return $this->ancho * $this->alto;
    }
    /**
     * perimetro
     *
     * Description
     *
     * @return int
     */
    public function perimetro()
    {
        return 2 * $this->ancho + 2 * $this->alto;
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
        parent::escalar($dx); //$this->ancho
        $this->alto *= $dx / 100;
    }
    /**
     * __toString
     *
     * Description
     *
     * @return string
     */
    public function __toString()
    {
        $cuadradoToString = parent::__toString();
        return 'Rectangulo[' . $cuadradoToString . ', ' . $this->alto . ']';
    }
}


