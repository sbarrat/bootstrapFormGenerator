<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 26/4/15
 * Time: 13:53
 */

namespace BootstrapForm;



class FormTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Form
     */
    public $form;
    /**
     * @var array
     */
    public $formTypes = array();

    public function setUp()
    {
        $this->form = new Form('test');
        $this->formTypes = $this->form->formsType;
    }

    public function tearDown()
    {
        unset($this->form);
        unset($this->formTypes);
    }
    public function testTypeForm()
    {
        foreach ($this->formTypes as $expected => $type) {
            $this->form->setType($expected);
            $this->assertEquals($expected, $this->form->getType());
        }
    }
    public function testRenderForm()
    {
        foreach ($this->formTypes as $expected => $type) {
            $this->form->setType($expected);
            $this->form->render();
            $this->assertEquals(
                $type,
                get_class($this->form->form)
            );
        }

    }

}
