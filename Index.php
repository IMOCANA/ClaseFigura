<?php
/**
 * Created by PhpStorm.
 * User: isamar
 * Date: 6/10/15
 * Time: 17:19
 */

namespace ClaseFigura;

require_once 'Figura.php';
require_once 'Punto.php';


class Index
{

    public static function pruebaPunto()
    {
        $p = new Punto(3,4);
        echo $p . '<br />';
        $p->desplazar(10,10);
        echo $p . '<br />';
        $p1 = new Punto(2,2);
        echo 'Distancia: ' . $p->distancia($p1);
        echo 'Distancia: ' . Punto::distancia2($p, $p1);
    }
    public static function pruebaCirculo()
    {
        echo '<p>' . Figura::getNumFiguras() . '</p>';
        $origen = new Punto(0,0);
        $c = new Circulo($origen, 3);
        echo $c;
        $c->desplazar(10,10);
        echo $c;
        echo '<p>' . Figura::getNumFiguras() . '</p>';
    }
    public static function pruebaRectangulo()
    {
        $r = new Rectangulo(new Punto(3,0), 10, 20);
        $r1 = new Rectangulo(new Punto(0,0), 10, 20);
        echo $r->distancia($r1);
    }
}

Index::pruebaPunto();

