<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 27/04/15
 * Time: 12:51
 */

namespace BootstrapForm;

class FieldsetTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Fieldset
     */
    public $fieldset;
    public function setUp()
    {
        $this->fieldset = new Fieldset();
    }
    public function tearDown()
    {
        unset($this->fieldset);
    }

    public function testElementArray()
    {
        $this->assertTrue(is_array($this->fieldset->getElements()));
    }
    public function testHasGroup()
    {
        $this->assertTrue($this->fieldset->hasGroup());
        $expected = false;
        $this->fieldset->setGroup(false);
        $this->assertFalse($this->fieldset->hasGroup());
    }
    public function testLegend()
    {
        $this->assertEquals('', $this->fieldset->getLegend());
        $expected = 'Titulo';
        $this->fieldset->setLegend('Titulo');
        $this->assertEquals($expected, $this->fieldset->getLegend());
    }

    public function testRender()
    {
        $expected = '<fieldset></fieldset>';
        $this->assertEquals($expected, $this->fieldset->render());
        $expected = '<fieldset><legend>Hola</legend></fieldset>';
        $this->fieldset->setLegend('Hola');
        $this->assertEquals($expected, $this->fieldset->render());
        $this->fieldset->setElements(array('element'));
        $expected = '<fieldset><legend>Hola</legend>element</fieldset>';
        $this->assertEquals($expected, $this->fieldset->render());
        $expected = 'element';
        $this->fieldset->setGroup(false);
        $this->assertEquals($expected, $this->fieldset->render());
    }
}
