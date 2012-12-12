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

 
  
    public function executeAuth(sfWebRequest $request){
        
              $this->setLayout('layoutReservacion');
              $_SESSION["asientoSalida"] = $request->getParameter("asiento");
              $asiento = $_SESSION["asientoSalida"];
              $vuelo = $_SESSION["codVueloSalida"];
                    
              $db = DB::Instance();
                    
              $sql = "select ca.codigo_campo as codigo_campo, co.costo as costo
                from campos_x_avion ca,
                     vuelos vu,
                     costo_x_tipo_campo co
               where ca.tipo_campo != 'P'
                 and vu.codigo_vuelo = '$vuelo'
                 and ca.placa_avion = vu.placa_avion
                 and ca.tipo_campo = co.tipo_campo
                 and vu.codigo_vuelo = co.codigo_vuelo
                 and ca.codigo_campo = '$asiento'
               order by ca.codigo_campo";
                  
              $costo = $db->queryArray($sql);
              $_SESSION["costo"] = $costo[0]["costo"] ;
              
    }
  
  public function executeLogin(sfWebRequest $request)
  {
      
      $this->setLayout('layoutReservacion');
           
      $username = $request->getParameter("username");
      $password = $request->getParameter("password");
      
      $db = DB::Instance();
       
      $sql = "select count(*) As login from usuarios where codigo_usuario = '$username' AND password = '$password';";
      
      $login = $db->queryArray($sql);
      
      
      if($login[0]["login"] != 1){
          
            $_SESSION["errorMessage"] = "Usuario o Password Invalido";
            $this->redirect("reservacion/auth");
                      
      } else {
          
          $_SESSION["errorMessage"] = "";
          
          $sql2 = "select identificacion, nombre_completo from clientes where fk_codigo_usuario = '$username'";
          
          $clientes = $db->queryArray($sql2);
          $_SESSION["loggedIn"] = true;
          $_SESSION["idCliente"] = $clientes[0]["identificacion"];
          $_SESSION["nombreCliente"] = $clientes[0]["nombre_completo"];
          
          $this->redirect("reservacion/confirmacion");
          
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
      
      /*
      $sql2 = "SELECT * 
                    FROM campos_x_avion
                    WHERE tipo_campo !=  'P'
                    AND placa_avion =  '$placa'
                    AND codigo_campo NOT 
                    IN (
                            SELECT codigo_asiento FROM  `reservacion_tiquete` WHERE codigo_vuelo = $vuelo
                    )";
     */
      
      $sql2 = "select ca.codigo_campo as codigo_campo, co.costo as costo
                from campos_x_avion ca,
                     vuelos vu,
                     costo_x_tipo_campo co
               where ca.tipo_campo != 'P'
                 and vu.codigo_vuelo = '$vuelo'
                 and ca.placa_avion = vu.placa_avion
                 and ca.tipo_campo = co.tipo_campo
                 and vu.codigo_vuelo = co.codigo_vuelo
                 and (ca.codigo_campo not in (select rs.codigo_asiento
                                               from reservacion_tiquete rs
                                              where rs.codigo_vuelo = vu.codigo_vuelo
                                                and rs.estado_tiquete = 'V')
                      )
               order by ca.codigo_campo";

      $this->asientos = $db->queryArray($sql2);
      
  }
  
  public function executeVueloRegreso(sfWebRequest $request){

      $this->setLayout('layoutReservacion');
      
      $_SESSION["asientoSalida"] = $request->getParameter("asiento");
      $db = DB::Instance();
      
      $salida = $_SESSION["ciudadLlegada"];
      $destino = $_SESSION["ciudadSalida"];
      
      $fechaRegreso = $_SESSION["fechaLlegada"];
      
      $sql3 = "CALL `p_vu_s_vuelos` ( '$salida' , '$destino' , '$fechaRegreso' );";
      
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
    
  public function executeConfirmacion(sfWebRequest $request){
      
      $this->setLayout('layoutReservacion');
      
      $this->asientoRegreso  = $_SESSION["asientoRegreso"];
      $this->asientoSalida  = $_SESSION["asientoSalida"];
      $this->vueloSalida = $_SESSION["codVueloSalida"];
      $this->vueloRegreso = $_SESSION["codVueloRegreso"];
      
      $this->costo = $_SESSION["costo"];
      
  }
  
  public function executeReservar(sfWebRequest $request){
      
            $this->setLayout('layoutReservacion');
            
            $vueloSalida  = $_SESSION["codVueloSalida"];
            $asientoSalida  = $_SESSION["asientoSalida"];
            $idCliente =   $_SESSION["idCliente"];
            
            $db = DB::Instance();
            $sql3 = "insert into reservacion_tiquete(codigo_vuelo, codigo_asiento, identificacion_cliente ) 
              values('$vueloSalida','$asientoSalida','$idCliente')";
          
            $db->exec($sql3);
          
            $this->reserveFlag = true;
          
  }
         
  
  
}
