<?php

abstract class Shape
{
    protected $width = 0;
    protected $height = 0;
    protected $large = 0;
    protected $size = 0;
    protected $long = 0;

    abstract public function getArea();
}