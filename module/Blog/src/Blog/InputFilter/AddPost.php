<?php

namespace Blog\InputFilter;

use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;
use Zend\Validator\ValidatorChain;

class AddPost extends InputFilter
{
  public function __construct()
  {
    $title = new Input('title');
    $title->setRequired(true);


  }

  protected function getTitleValidatorChain()
  {
    $validator = new ValidatorChain();
  }
}
