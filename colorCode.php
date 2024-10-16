<?php

class RGB{
    private $colors;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode = "")
{
    $this->colors = ltrim($colorCode , "#");
    $this->parseColor();
}

public function getColor()
{
    return $this->colors ;
}

public function getRGBColor()
{
    return array($this->red, $this->green, $this->blue);
}

public function readRGBColor()
{
    echo "Red = {$this->red} <br />     Green = {$this->green}  <br />  Blue = {$this->blue} " ;
}

public function set()
{
    return $this->colors;
    $this->parseColor();
}

private function parseColor()
{
    if($this->colors)
    
    {
        list($this->red , $this->green , $this->blue) = sscanf($this->colors , "%2x%2x%2x");
    }else{
        list($this->red , $this->green , $this->blue) = array(0,0,0);
    }

}       

    function getRed()
    {
        return $this->red;
    }

    function getGreen()
    {
        return $this->green;
    }

    function getBlue()
    {
        return $this->blue;
    }




}

$color = new RGB('#ff00ff');
$color ->readRGBColor();

