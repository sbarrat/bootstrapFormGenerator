<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 27/04/15
 * Time: 12:30
 */

namespace BootstrapForm;


class Fieldset {
    private $elements = array();
    private $group = true;
    private $legend = '';

    /**
     * @param array $elements
     * @param bool $group
     * @param string $legend
     */
    public function __construct($elements = array(), $group = true, $legend = '')
    {
        $this->setElements($elements);
        $this->setGroup($group);
        $this->setLegend($legend);
    }

    /**
     * @param $elements
     */
    public function setElements($elements)
    {
        $this->elements = $elements;
    }

    /**
     * @return array
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param bool $group
     */
    public function setGroup($group = true)
    {
        $this->group = $group;
    }

    /**
     * @return bool
     */
    public function hasGroup()
    {
        return $this->group;
    }

    /**
     * @param $legend
     */
    public function setLegend($legend)
    {
        $this->legend = $legend;
    }

    /**
     * @return string
     */
    public function getLegend()
    {
        return $this->legend;
    }

    /**
     * @return string
     */
    public function render()
    {
        $fieldset = '';
        if ($this->hasGroup()) {
            $fieldset .= "<fieldset>";
            if (strlen($this->getLegend())) {
                $fieldset .= "<legend>".$this->getLegend()."</legend>";
            }
        }
        foreach ($this->getElements() as $element) {
            $fieldset .= $element;
        }
        if ($this->hasGroup()) {
            $fieldset .= "</fieldset>";
        }
        return $fieldset;
    }
}