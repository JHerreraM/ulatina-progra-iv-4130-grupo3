<?php

/**
 * principal actions.
 *
 * @package    PrograIV
 * @subpackage principal
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class principalActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */

  public function executeHome(sfWebRequest $request)
  {
      $this->setLayout('layout');
  }
  
  public function executeAviones(sfWebRequest $request)
  {
      $this->setLayout('layout');
  }
  
  public function executeSeguridad(sfWebRequest $request)
  {
      $this->setLayout('layout');
  }
  
  public function executeContacto(sfWebRequest $request)
  {
      $this->setLayout('layout');
  }
  
}
