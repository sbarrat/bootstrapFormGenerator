<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 14:11
 */

namespace BootstrapForm;


final class FormBasic extends Form{

    public function __construct($idName, $labels = true, $elements = array(), $method = 'POST', $action = '')
    {
        parent::setIdName($idName);
        parent::setLabels($labels);
        parent::setType('basic');
        parent::setElements($elements);
        parent::setMethod($method);
        parent::setAction($action);
    }
    public function render()
    {
        $form = "<form id='".$this->getIdName()."' name='".$this->getIdName()."'
        method='".$this->getMethod()."' action='"
            .$this->getAction()."'>";
        foreach ($this->getElements() as $element) {
            $form .= $element;
        }
        $form .= "</form>";
        return $form;
    }
}