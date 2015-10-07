<?php
/**
 * Created by PhpStorm.
 * User: isamar
 * Date: 6/10/15
 * Time: 16:00
 */

namespace ClaseFigura;

    class Punto

    {
        /** DECLARACIÓN VARIABLE**/

        /* (declaramos las variable (x,y) que forman
        * un punto y son privadas)*/

        private $x;
        private $y;

        /** CREAMOS EL CONSTRUCTOR**/

        /*Añade un valor de los atributos que se convierte
        en variables cuando el usuario introduce por pantalla
        los valores.*/

        public function __contruct($x, $y)
        {
            $this->x = $x;
            $this->y = $y;
        }

        /** CREAMOS LOS METODOS**/

        /*** Método get: método de consulta y acceso, solo devolverá el valor del atributo.
         *** Método set: método modificador, asignara un nuevo valor al atributo.
         **/

        public function getX()
        {
            return $this->x;
        }

        public function setX()
        {
            return $this->x;
        }

        public function getY()
        {
            return $this->y;
        }

        public function setY()
        {
            return $this->y;
        }



        public function __toString()
        {
            return 'Punto[' . $this->x . ', ' . $this->y . ']';
        }

        /* CREAMOS FUNCION DESPLAZAR */

        public function desplazar($dx, $dy)
        {
            $this->x += $dx;
            $this->y += $dy;
        }

        /* CREAMOS FUNCION DISTANCIA*/

        public function distancia(Punto $p)
        {
            $dx = $p->getX() - $this->x;
            $dy = $p->getY() - $this->y;
            return sqrt(pow($dx, 2) + pow($dy, 2));
        }

        /* CREAMOS FUNCION DISTANCIA ENTRE DOS PUNTOS*/

        public static function distancia2(Punto $p, Punto $p1)
        {
            $dx = $p->getX() - $p1->getX();
            $dy = $p->getY() - $p1->getY();
            return sqrt(pow($dx, 2) + pow($dy, 2));
        }

    }