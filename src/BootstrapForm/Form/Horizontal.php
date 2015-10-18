<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 17:17
 */

namespace BootstrapForm\Form;

use BootstrapForm\Form;
class Horizontal extends Form {

    /**
     * 
     * @param type $idName
     * @param type $elements
     * @param type $method
     * @param type $action
     */
    public function __construct($idName, $elements = array(), $method = 'POST', $action = '')
    {
        parent::setIdName($idName);
        parent::setType('horizontal');
        parent::setElements($elements);
        parent::setMethod($method);
        parent::setAction($action);
    }
    /**
     * Render the form
     * @return string
     */
    public function render()
    {
        $form = "<form id='".$this->getIdName()."' name='".$this->getIdName()."'
        class='form-horizontal' method='".$this->getMethod()."' action='"
            .$this->getAction()."'>";
        foreach ($this->getElements() as $element) {
            $form .= $element;
        }
        $form .= "</form>";
        return $form;
    }
}