<?php

namespace Drupal\constant_contact_block_redirect\Controller;

use Drupal\Core\Controller\ControllerBase;

class ConstantContactRedirectController extends ControllerBase {

  public function index(){

    return array(
      '#theme' => 'constant_contact_block_redirect',
    );
  }
}
