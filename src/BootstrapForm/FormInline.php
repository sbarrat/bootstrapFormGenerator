<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 17:16
 */

namespace BootstrapForm;


class FormInline extends Form{

    public function render()
    {
        $form = "<form id='".$this->getIdName()."' name='".$this->getIdName()."'
        class='form-inline' method='".$this->getMethod()."' action='"
        .$this->getAction()."'>";
        // TODO: Implement render() method.
        $form .= "</form>";
        return $form;
    }
}