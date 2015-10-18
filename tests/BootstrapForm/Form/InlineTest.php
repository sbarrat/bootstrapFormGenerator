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
        
        $this->assertEquals('POST', $this->form->getMethod());
        $this->form->setMethod('GET');
        $this->assertEquals('GET', $this->form->getMethod());
    }
}
