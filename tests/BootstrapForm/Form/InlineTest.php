<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 13:53
 */

namespace BootstrapForm\Form;


class InlineTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Inline
     */
    public $form;
    /**
     * @var array
     */
    public $formTypes = array();

    public function setUp()
    {
        $this->form = new Inline('test');
    }

    public function tearDown()
    {
        unset($this->form);

    }
    public function testTypeForm()
    {
        $this->assertEquals('inline', $this->form->getType());
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
