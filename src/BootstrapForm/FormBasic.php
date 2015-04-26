<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 14:11
 */

namespace BootstrapForm;


final class FormBasic extends Form{

    public function render()
    {
        $form = "<form id='".$this->getIdName()."' name='".$this->getIdName()."'
        class='form-horizontal' method='".$this->getMethod()."' action='"
            .$this->getAction()."'>";
        // TODO: Implement render() method.
        $form .= "</form>";
        return $form;
    }
}