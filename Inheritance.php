<?php

class Skamuhi
{
    public function getSkamuhipink($skamuhipink)
    {
        return $skamuhipink;
    }
}

class Smk extends Skamuhi 
{
    //
}
class Kejuruan extends Skamuhi 
{
    //
}

$smk = new Smk;
echo $smk->getSkamuhipink("software");