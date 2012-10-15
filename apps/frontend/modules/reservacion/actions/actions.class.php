<?php

/**
 * reservacion actions.
 *
 * @package    PrograIV
 * @subpackage reservacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reservacionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeSafety(sfWebRequest $request)
  {
  }
  
  public function executeAgregar(sfWebRequest $request)
  {
  }
  
  public function executeList(sfWebRequest $request)
  {
  }
  
  public function executeLogin(sfWebRequest $request)
  {
      $this->username = $request->getParameter("username");
      $this->password = $request->getParameter("password");
      
      if($this->username == "admin" && $this->password == "12345"){
          $this->message = "Login Success";
      } else {
          $this->message = "Login Fail";
      }
  }
  
}
