<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 16/10/15
 * Time: 19:37
 */
require_once 'vendor/autoload.php';
use BootstrapForm\Form;
use BootstrapForm\Input;

$inputText = new Input('basic', 'basicInput');
// Basic Form
$form = new  Form('basicForm');
$form->setElements(array($inputText->render()));
echo $form->render();
// Horizontal Form
$form = new BootstrapForm\Form('horizontalForm', 'horizontal');
echo $form->render();
// Inline Form
$form = new BootstrapForm\Form('inlineForm', 'inline');
echo $form->render();
