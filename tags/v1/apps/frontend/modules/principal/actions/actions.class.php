<?php

/**
 * principal actions.
 *
 * @package    PrograIV
 * @subpackage principal
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
require_once 'include/DB.class.php';

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
          
      $db = DB::Instance();
      $sql = "select * from noticias order by fecha DESC limit 3";
          
      $this->noticias = $db->queryArray($sql);
      
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
      $accion = $request->getParameter("accion");
      if($accion == "insertar"){
          
          $nombre  =  $request->getParameter("nombre") ;
          $email =  $request->getParameter("email") ;
          $mensaje = $request->getParameter("mensaje") ;
          
         $db = DB::Instance();
         $sql = "insert into contactos(nombre, correo, mensaje, fecha) values ( '$nombre', '$email', '$mensaje', NOW() )";
         
         $db->exec($sql);
         $this->contactoInsertado = true;
         
      }
      
  }
  

  public function executeLogin(sfWebRequest $request)
  {
      $this->setLayout('layout');
  }
  
  public function executeNosotros(sfWebRequest $request)
  {
      $this->setLayout('layout');
  }
  
  public function executeCharters(sfWebRequest $request)
  {
      $this->setLayout('layout');
  }
  
  public function executeReservacion(sfWebRequest $request){
      $this->setLayout('layout');

  }
  
}
