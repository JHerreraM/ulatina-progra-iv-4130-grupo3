<?php

/**
 * reservacion actions.
 *
 * @package    PrograIV
 * @subpackage reservacion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
require_once 'include/DB.class.php';

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
  
  public function executeInicial(sfWebRequest $request){

      $this->setLayout('layoutReservacion');
            
      $sentidoReservacion = $request->getParameter("sentido");
      $salida = $request->getParameter("salida");
      $destino = $request->getParameter("destino");
      $fechaSalida = $request->getParameter("fechaSalida");
      $horaSalida = $request->getParameter("horaSalida");
      $horaLlegada = $request->getParameter("horaLlegada");
      $fechaLlegada = $request->getParameter("fechaLlegada"); 
      $numPasajeros = $request->getParameter("numPasajeros"); 
      
      $db = DB::Instance();
      $sql = "CALL `p_ci_s_cod_ciudad`('$salida') ;";
   
      $this->ciudadesSalida = $db->queryArray($sql);
      
      $sql2 = "CALL `p_ci_s_cod_ciudad`('$destino') ;";
      
      $this->ciudadesLlegada = $db->queryArray($sql2);
      
      if( ( sizeOf( $this->ciudadesSalida) == 1) && ( sizeOf( !$this->ciudadesLlegada) == 1) ){
           $this->forward("reservacion", "error");
      }
      
      $sql3 = " SET @p0 =  '$this->ciudadesSalida[0]';
                SET @p1 =  '$this->ciudadesLlegada[0]';
                SET @p2 =  '2012-12-11 00:00:00';
                SET @p3 =  '2012-12-13 00:00:00';
                
                CALL `p_vu_s_vuelos` ( @p0 , @p1 , @p2 , @p3 );";
      
  }
  
  public function executeError(sfWebRequest $request){

  }
  
}
