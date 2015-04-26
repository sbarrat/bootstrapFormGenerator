<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 12:59
 */

namespace BootstrapForm;


class Form implements \IbootstrapForm{

    private $idComponent;

    public function __construct($idComponent)
    {
    }

    public function setId($idComponent)
    {
        $this->idComponent = $idComponent;
    }
    public function render()
    {
        echo "Hello World";
    }
}