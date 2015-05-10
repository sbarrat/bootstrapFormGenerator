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
    const version = '0.0.1-alpha';
    private $idName;
    private $formType = 'basic';
    private $elements = array();
    public $formsType = array(
        'basic' => 'BootstrapForm\Form\Basic',
        'inline' => 'BootstrapForm\Form\Inline',
        'horizontal' => 'BootstrapForm\Form\Horizontal'
    );
    public $formClass = array(
        'basic' => '',
        'inline' => 'class="form-inline"',
        'horizontal' => 'class="form-horizontal"'
    );
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
     * @param array $elements
     * @param string $method
     * @param string $action
     */
    public function __construct(
        $idName,
        $type = 'basic',
        $elements = array(),
        $method = 'POST',
        $action = ''
    )
    {
        $this->setIdName($idName);
        $this->setType($type);
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
     * Establece el array de elementos que contendra el formulario
     * @param array $elements
     */
    public function setElements(array $elements = array())
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

    /**
     * Establecemos el metodo de envio
     * @param string $method
     */
    public function setMethod($method = 'POST')
    {
        $this->method = $method;
    }

    /**
     * Devuelve el metodo de envio
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Establece la accion de post
     * @param string $action
     */
    public function setAction($action = '')
    {
        $this->action = $action;
    }

    /**
     * Devuelve la accion
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Renderiza el formulario
     * @return mixed
     */
    public function render()
    {
        if (array_key_exists($this->formType, $this->formsType)) {
            $this->form = new $this->formsType[$this->formType]
            (
                $this->idName,
                $this->elements,
                $this->method,
                $this->action
            );
        }
        return $this->form->render();
    }
}
