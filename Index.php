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
        $p = new Punto(2,6);
        echo $p . '<br />';
        $p->desplazar(20,20);
        echo $p . '<br />';
        $p1 = new Punto(1,1);
        echo 'Distancia: ' . $p->distancia($p1);
        echo 'Distancia: ' . Punto::distancia2($p, $p1);
    }
    public static function pruebaCirculo()
    {
        echo '<p>' . Figura::getNumFiguras() . '</p>';
        $origen = new Punto(0,0);
        $c = new Circulo($origen, 5);
        echo $c;
        $c->desplazar(20,20);
        echo $c;
        echo '<p>' . Figura::getNumFiguras() . '</p>';
    }
    public static function pruebaRectangulo()
    {
        $r = new Rectangulo(new Punto(4,0), 20, 30);
        $r1 = new Rectangulo(new Punto(0,0), 20, 40);
        echo $r->distancia($r1);
    }

    public static function pruebaTriangulo()
    {
        $base = new Triangulo(new Punto(4,0), 20, 30);
        $altura = new Rectangulo(new Punto(0,0), 20, 40);
        echo $r->distancia($r1);
    }
}

Index::pruebaCirculo();
Index::pruebaPunto();
Index::pruebaRectangulo();
Index::pruebaTriangulo();
Index::pruebaCuadrado();



