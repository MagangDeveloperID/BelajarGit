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

    public function setSize(int $size)
    {
        $this->size = $size;
    }

    public function setLong(int $long)
    {
        $this->long = $long;
    }

    public function getArea(): int
    {
        return $this->width * $this->height * $this->large * $this->size * $this->$long;
    }
}