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
  
  public function executeVueloSalida(sfWebRequest $request){

      $this->setLayout('layoutReservacion');
            
      $sentidoReservacion = $request->getParameter("sentido");
      
      $salida = $request->getParameter("salida");
      $destino = $request->getParameter("destino");
      
      $fechaSalida = $request->getParameter("fechaSalida");
      $horaSalida = $request->getParameter("horaSalida"); 
      
      $horaLlegada = $request->getParameter("horaLlegada");
      $fechaLlegada = $request->getParameter("fechaLlegada"); 
      echo   $fechaLlegada; 
      
      $numPasajeros = $request->getParameter("numPasajeros"); 
      $_SESSION["numPasajeros"] = $numPasajeros; 
            
      $db = DB::Instance();
      $sql = "CALL `p_ci_s_cod_ciudad`('$salida') ;";
      
      $this->ciudadesSalida = $db->queryArray($sql);
      
      
      $sql2 = "CALL `p_ci_s_cod_ciudad`('$destino') ;";
            
      $this->ciudadesLlegada = $db->queryArray($sql2);
      
      $ciudadSalida = $this->ciudadesSalida[0][0];
      $cuidadLlegada = $this->ciudadesLlegada[0][0];
      
      $_SESSION["ciudadSalida"] =  $ciudadSalida;
      $_SESSION["ciudadLlegada"] =  $cuidadLlegada;
      
      if( ( sizeOf( $this->ciudadesSalida) != 1) && ( sizeOf( !$this->ciudadesLlegada) != 1) ){
           echo "Error";
      }
      
      $fechaSalida2 = date("Y-m-d", strtotime($fechaSalida));
      $horaSalida2 =  date("H:i", STRTOTIME($horaSalida));
      
      $fechaRegreso2 = date("Y-m-d", strtotime($fechaLlegada));
      $horaRegreso2 =  date("H:i", STRTOTIME($horaLlegada));

      $_SESSION["fechaSalida"] = $fechaSalida2 . " " . $horaSalida2;
      $_SESSION["fechaLlegada"] = $fechaRegreso2 . " " . $horaRegreso2;
      
      $sql3 = "CALL `p_vu_s_vuelos` ( '$ciudadSalida' , '$cuidadLlegada' , '$fechaSalida2 $horaSalida2' );";
      
     $this->vuelos = $db->queryArray($sql3);

  }
  
  public function executeAsientoSalida(sfWebRequest $request){
      
      $this->setLayout('layoutReservacion');
      $vuelo = $request->getParameter("idVuelo");
      $_SESSION["codVueloSalida"] = $vuelo;
      
      $db = DB::Instance();
      
      $sql = "SELECT placa_avion FROM vuelos WHERE codigo_vuelo =  '$vuelo'";
      $this->placa_avion = $db->queryArray($sql);
      $placa =  $this->placa_avion[0]["placa_avion"];
      
      $sql2 = "SELECT * 
                    FROM campos_x_avion
                    WHERE tipo_campo !=  'P'
                    AND placa_avion =  '$placa'
                    AND codigo_campo NOT 
                    IN (
                            SELECT codigo_asiento FROM  `reservacion_tiquete` WHERE codigo_vuelo = $vuelo
                    )";
      
      $this->asientos = $db->queryArray($sql2);
      
  }
  
  public function executeVueloRegreso(sfWebRequest $request){

      $this->setLayout('layoutReservacion');
      
      $db = DB::Instance();
      
      $salida = $_SESSION["ciudadLlegada"];
      $destino = $_SESSION["ciudadSalida"];
      
      $fechaRegreso = $_SESSION["fechaLlegada"];
      
      $sql3 = "CALL `p_vu_s_vuelos` ( '$salida' , '$destino' , '$fechaRegreso' );";
      echo $sql3;
      
      $this->vuelos = $db->queryArray($sql3);

  }
  
    public function executeAsientoRegreso(sfWebRequest $request){
      
      $this->setLayout('layoutReservacion');
      $vuelo = $request->getParameter("idVuelo");
      $_SESSION["codVueloRegreso"] = $vuelo;
      
      $db = DB::Instance();
      
      $sql = "SELECT placa_avion FROM vuelos WHERE codigo_vuelo =  '$vuelo'";
      $this->placa_avion = $db->queryArray($sql);
      $placa =  $this->placa_avion[0]["placa_avion"];
      
      $sql2 = "SELECT * 
                    FROM campos_x_avion
                    WHERE tipo_campo !=  'P'
                    AND placa_avion =  '$placa'
                    AND codigo_campo NOT 
                    IN (
                            SELECT codigo_asiento FROM  `reservacion_tiquete` WHERE codigo_vuelo = $vuelo
                    )";
      
      $this->asientos = $db->queryArray($sql2);
      
  }
  
  
  
}
