<?php

/**
 * backend actions.
 *
 * @package    PrograIV
 * @subpackage backend
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
require_once 'include/DB.class.php';

class backendActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeSample(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
  }
  
  public function executeIndex(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
  }
  
  public function executeAviones(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
  }
  
  public function executeVuelos(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
  }
  
  public function executeListAviones(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          $sql = "select * from aviones";
          
          $this->aviones = $db->queryArray($sql);
          
  }
  
    public function executeListVuelos(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          $sql = "select * from vuelos";
          
          $this->vuelos = $db->queryArray($sql);
          
  }
  
  
}
