<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 17:17
 */

namespace BootstrapForm;


class FormHorizontal extends Form {

    public function __construct($idName, $labels = true, $elements = array(), $method = 'POST', $action = '')
    {
        parent::setIdName($idName);
        parent::setLabels($labels);
        parent::setType('horizontal');
        parent::setElements($elements);
        parent::setMethod($method);
        parent::setAction($action);
    }
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