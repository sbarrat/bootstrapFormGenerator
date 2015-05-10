<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 10/5/15
 * Time: 11:27
 */

namespace BootstrapForm;

use BootstrapForm\Input\Attributes;

class Input extends Attributes{
    private $formType = 'basic';
    private $labelVisible = true;
    private $labelText = '';
    private $labelClass = array();
    private $inputClass = 'col-sm-10';
    private $divOpen = '';
    private $divClose = '';
    public $formsType = array(
        'basic' => 'BootstrapForm\Input\Basic',
        'inline' => 'BootstrapForm\Input\Inline',
        'horizontal' => 'BootstrapForm\Input\Horizontal'
    );

    public function __construct($inputType, $idName, $labelText = '',
        $labelVisible = true, $formType = 'basic',
        $labelClass = 'col-sm-2', $inputClass = 'col-sm-10'
    )
    {
        $this->setIdName($idName);
        $this->setLabelText($labelText);
        $this->setLabelVisible($labelVisible);
        $this->setInputClass($inputClass);
        $this->setFormType($formType);
        $this->setLabelClass($labelClass);
        parent::setIdName($idName);
        parent::setType($inputType);

    }

    public function setFormType($formType)
    {
        if (array_key_exists($formType, $this->formsType)) {
            $this->formType = $formType;
        }
        if ($this->formType == 'horizontal') {
            $this->divOpen = "<div class='".$this->getInputClass()."'>";
            $this->divClose = "</div>";
        }
    }
    public function getFormType()
    {
        return $this->formsType;
    }

    public function setLabelVisible($labelVisible = true)
    {
        $this->labelVisible = $labelVisible;
    }

    public function isLabelVisible()
    {
        return $this->labelVisible;
    }
    public function setLabelText($labelText = '')
    {
        $this->labelText = $labelText;
    }
    public function getLabelText()
    {
        return $this->labelText;
    }

    public function setLabelClass($labelClass = 'col-sm-2')
    {
        if (!$this->isLabelVisible()) {
            array_push($this->labelClass, 'sr-only');
        }
        if ($this->getFormType() == 'horizontal') {
            array_push($this->labelClass, 'control-label');
            if (strlen($labelClass)) {
                array_push($this->labelClass, $labelClass);
            }
        }

    }
    public function getLabelClass()
    {
        return implode(" ", $this->labelClass);
    }

    public function setInputClass($inputClass = 'col-sm-10')
    {
        $this->inputClass = $inputClass;
    }
    public function getInputClass()
    {
        return $this->inputClass;
    }
    public function render()
    {
        $format = "
        <div class='form-group'>
        <label for='".$this->getIdName()."'
            class='".$this->getLabelClass() ."''>"
            .$this->getLabelText()."</label>
        ".$this->divOpen."
        <input type='".$this->getType()."' class='".$this->getClass()."'
        id='".$this->getIdName()."' name='".$this->getIdName()."'
        placeholder='".$this->getPlaceholder()."'
        readonly='" .$this->isReadOnly()."' value='".$this->getValue()."'>
        ".$this->divClose."
        </div>";
        return $format;
    }

}