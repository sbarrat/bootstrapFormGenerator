<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 17:16
 */

namespace BootstrapForm;


class FormInline extends Form{

    public function __construct($idName, $labels = true, $elements = array(), $method = 'POST', $action = '')
    {
        parent::setIdName($idName);
        parent::setLabels($labels);
        parent::setType('inline');
        parent::setElements($elements);
        parent::setMethod($method);
        parent::setAction($action);
    }
    public function render()
    {
        $form = "<form id='".$this->getIdName()."' name='".$this->getIdName()."'
        class='form-inline' method='".$this->getMethod()."' action='"
        .$this->getAction()."'>";
        foreach ($this->getElements() as $element) {
            $form .= $element;
        }
        $form .= "</form>";
        return $form;
    }
}