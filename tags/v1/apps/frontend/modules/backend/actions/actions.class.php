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
  
  public function executePersonal(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
  }
  
  public function executeClientes(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
  }
  
  public function executePaises(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
  }
  
  public function executeCiudades(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
  }
  
  public function executeAeropuertos(sfWebRequest $request)
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
  
  public function executeListPersonal(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          $sql = "select * from personal";
          
          $this->personal = $db->queryArray($sql);
          
  }
  
  public function executeListClientes(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          $sql = "select * from clientes";
          
          $this->personal = $db->queryArray($sql);
          
  }
  
  public function executeListPaises(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          $sql = "select * from paises order by codigo_pais";
          
          $this->paises = $db->queryArray($sql);
          
  }
  
  public function executeListCiudades(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          $sql = "select * from ciudades order by codigo_pais, codigo_ciudad";
          
          $this->ciudades = $db->queryArray($sql);
          
  }
  
  public function executeListAeropuertos(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          $sql = "select * from aeropuertos order by codigo_pais, codigo_ciudad, codigo_aeropuerto";
          
          $this->aeropuertos = $db->queryArray($sql);
          
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
          $sql = "select codigo_vuelo as codigo,  
                        codigo_aeropuerto_origen as nombreOrigen, 
                        codigo_aeropuerto_destino as nombreDestino,  
                        tiempo_salida, 
                        tiempo_llegada,
                        duracion_estimada,
                        placa_avion from vuelos";

          $this->vuelos = $db->queryArray($sql);
  }
  
  public function executeEditPaises(sfWebRequest $request)
  {
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $sql = "select * from paises
              where codigo_pais = '".$_GET["paisEdit"]."'
               order by codigo_pais";
      $this->paises = $db->queryArray($sql);
  }
  
  public function executeGuardaPaises(sfWebRequest $request)
  {
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $sql = "update paises
              set codigo_pais = '".$_get["codPaisNuevo"]."',
                  nombre_pais = '".$_get["nomPaisNuevo"]."'
                  nombre_pais = '".$_get["nacPais"]."'
              where codigo_pais = '".$_get["codPaisAnterior"]."'
               order by codigo_pais";
      $this->paises = $db->queryArray($sql);
  }
  
}
