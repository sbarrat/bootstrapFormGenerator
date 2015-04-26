<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 12:59
 * version 0.0.1-alpha
 */


namespace BootstrapForm;


class Form {

    private $idName;
    private $formType = 'basic';
    private $elements = array();
    public $formsType = array(
        'basic' => 'BootstrapForm\FormBasic',
        'inline' => 'BootstrapForm\FormInline',
        'horizontal' => 'BootstrapForm\FormHorizontal'
    );
    private $labels = true;
    private $method = 'POST';
    private $action = '';
    /**
     * @var bool|Form
     */
    public $form = false;

    /**
     * Inicializa el formulario
     * @param $idName
     * @param string $type
     * @param bool $labels
     * @param array $elements
     * @param string $method
     * @param string $action
     */
    public function __construct(
        $idName,
        $type = 'basic',
        $labels = true,
        $elements = array(),
        $method = 'POST',
        $action = ''
    )
    {
        $this->setIdName($idName);
        $this->setType($type);
        $this->setlabels($labels);
        $this->setElements($elements);
        $this->setMethod($method);
        $this->setAction($action);
    }

    /**
     * Establece el tipo de formulario
     * @param string $formType
     */
    public function setType($formType = 'basic')
    {
        $this->formType = $formType;
    }

    /**
     * Devuelve el tipo de formulario
     * @return string
     */
    public function getType()
    {
        return $this->formType;
    }

    /**
     * Establece el id de formulario
     * @param $idName
     */
    public function setIdName($idName)
    {
        $this->idName = $idName;
    }

    /**
     * Devuelve el tipo de formulario
     * @return string
     */
    public function getIdName()
    {
        return $this->formType;
    }

    /**
     * Establece si el formulario va a mostrar o no las labels
     * @param $labels
     */
    public function setLabels($labels = true)
    {
        $this->labels = $labels;
    }

    /**
     * Devuelve si el formulario tiene o no labels
     * @return bool
     */
    public function hasLabels()
    {
        return $this->labels;
    }

    /**
     * Establece el array de elementos que contendra el formulario
     * @param array $elements
     */
    public function setElements(array $elements)
    {
        $this->elements = $elements;
    }

    /**
     * Devuelve los elementos del formulario
     * @return array
     */
    public function getElements()
    {
        return $this->elements;
    }

    public function setMethod($method = 'POST')
    {
        $this->method = $method;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setAction($action = '')
    {
        $this->action = $action;
    }

    public function getAction()
    {
        return $this->action;
    }
    /**
     * Renderiza el formulario
     */
    public function render()
    {
        if (array_key_exists($this->formType, $this->formsType)) {
            $this->form = new $this->formsType[$this->formType]
            ($this);
        }
        return $this->form->render();
    }
}
