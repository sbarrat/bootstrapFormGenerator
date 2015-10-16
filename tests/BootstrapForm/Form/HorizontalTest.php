<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 13:53
 */

namespace BootstrapForm\Form;

class HorizontalTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Horizontal
     */
    public $form;
    /**
     * @var array
     */
    public $formTypes = array();

    public function setUp()
    {
        $this->form = new Horizontal('test');
    }

    public function tearDown()
    {
        unset($this->form);
    }
    public function testTypeForm()
    {
        $this->assertEquals('horizontal', $this->form->getType());
    }

    public function testMethodForm()
    {
        $expected = 'POST';
        $this->assertEquals($expected, $this->form->getMethod());
        $expected = 'GET';
        $this->form->setMethod('GET');
        $this->assertEquals($expected, $this->form->getMethod());
    }
}
