<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 10/5/15
 * Time: 16:35
 */

namespace BootstrapForm\Input;


class Attributes {
    /**
     * @var string
     */
    private $idName = '';
    /**
     * @var string
     */
    private $placeholder = '';
    /**
     * @var array
     */
    private $class = array('form-control');
    /**
     * @var string
     */
    private $type = 'text';
    /**
     * @var string
     */
    private $title = '';
    /**
     * @var string
     */
    private $value = '';
    /**
     * @var string
     */
    private $readonly = '';
    /**
     * @var array
     */
    private $inputTypes = array(
        'hidden', 'text', 'search', 'tel', 'url', 'email', 'password',
        'datetime', 'date', 'month', 'week', 'time', 'datetime-local',
        'number', 'range', 'color', 'checkbox', 'radio', 'file', 'submit',
        'image', 'reset', 'button'
    );

    /**
     * @param $idName
     */
    public function setIdName($idName)
    {
        $this->idName = $idName;
    }

    /**
     * @return string
     */
    public function getIdName()
    {
        return $this->idName;
    }

    /**
     * @param string $type
     */
    public function setType($type = 'text')
    {
        if (in_array($type, $this->inputTypes)) {
            $this->type = $type;
        }
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $placeholder
     */
    public function setPlaceholder($placeholder = '')
    {
        $this->placeholder = $placeholder;
    }

    /**
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param $class
     */
    public function addClass($class)
    {
        if (strlen($class)) {
            array_push($this->class, $class);
        }
    }
    public function getClass()
    {
        return implode(" ",$this->class);
    }

    /**
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $value
     */
    public function setValue($value = '')
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param bool $readonly
     */
    public function setReadOnly($readonly = false)
    {
        $this->readonly = $readonly;
    }

    /**
     * @return string
     */
    public function isReadOnly()
    {
        return $this->readonly;
    }

}