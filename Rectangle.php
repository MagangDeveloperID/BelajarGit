<?php

class Rectangle extends Shape
{
    public function setWidht(int $width)
    {
        $this->width = $width;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function setLarge(int $large)
    {
        $this->large = $large;
    }

    public function getArea(): int
    {
        return $this->width * $this->height * $this->large;
    }
}