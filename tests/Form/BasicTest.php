<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 13:53
 */

namespace BootstrapForm\Form;

class BasicTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Basic
     */
    public $form;
    /**
     * @var array
     */
    public $formTypes = array();

    public function setUp()
    {
        $this->form = new Basic('test');
    }

    public function tearDown()
    {
        unset($this->form);
    }
    public function testTypeForm()
    {
        $this->assertEquals('basic', $this->form->getType());
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
