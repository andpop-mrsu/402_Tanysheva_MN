<?php

namespace App;

class Vector
{

    private $coordinateX;
    private $coordinateY;
    private $coordinateZ;

    public function __construct(int $coordinateX, int $coordinateY, int $coordinateZ)
    {
        if ($coordinateX == 0 && $coordinateY == 0 && $coordinateZ == 0) {
            echo "Одна из координат не должна быть равна нулю!";
            exit();
        }

            $this->coordinateX = $coordinateX;
            $this->coordinateY = $coordinateY;
            $this->coordinateZ = $coordinateZ;
    }

    public function add(Vector $vector): Vector
    {
        $coordinateX = $this->coordinateX + $vector->coordinateX;
        $coordinateY = $this->coordinateY + $vector->coordinateY;
        $coordinateZ = $this->coordinateZ + $vector->coordinateZ;

        return new Vector($coordinateX, $coordinateY, $coordinateZ);
    }

    public function sub(Vector $vector): Vector
    {
        $coordinateX = $this->coordinateX - $vector->coordinateX;
        $coordinateY = $this->coordinateY - $vector->coordinateY;
        $coordinateZ = $this->coordinateZ - $vector->coordinateZ;

        return new Vector($coordinateX, $coordinateY, $coordinateZ);
    }

    public function product($number): Vector
    {
        $coordinateX = $this->coordinateX * $number;
        $coordinateY = $this->coordinateY * $number;
        $coordinateZ = $this->coordinateZ * $number;

        return new Vector($coordinateX, $coordinateY, $coordinateZ);
    }

    public function scalarProduct(Vector $vector): int
    {
        $coordinateX = $this->coordinateX * $vector->coordinateX;
        $coordinateY = $this->coordinateY * $vector->coordinateY;
        $coordinateZ = $this->coordinateZ * $vector->coordinateZ;

            $summOfCoordinates = $coordinateX + $coordinateY + $coordinateZ;
            return $summOfCoordinates;
    }

    public function vectorProduct(Vector $vector): Vector
    {
        $coordinateX = $this->coordinateY * $vector->zCoordinate - $this->coordinateZ * $vector->coordinateY;
        $coordinateY = $this->coordinateZ * $vector->coordinateX - $this->coordinateX * $vector->coordinateZ;
        $coordinateZ = $this->coordinateX * $vector->coordinateY - $this->coordinateY * $vector->coordinateX;

            return new Vector($coordinateX, $coordinateY, $coordinateZ);
    }

    public function __toString(): string
    {

        return "(" . $this->coordinateX . ";" . $this->coordinateY . ";" . $this->coordinateZ . ")";
    }
}
