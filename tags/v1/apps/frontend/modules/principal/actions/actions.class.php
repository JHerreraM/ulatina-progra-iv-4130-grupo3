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

 
       if( $request->getParameter("login") == "true"){
           
            $db = DB::Instance();

            $username = $request->getParameter("username");
            $password = $request->getParameter("password");

            $sql = "select count(*) As login from usuarios where codigo_usuario = '$username' AND password = '$password' AND tipo_usuario = 'E';";

            $login = $db->queryArray($sql);

            if($login[0]["login"] != 1){

                    $_SESSION["errorMessage"] = "Usuario o Password Invalido";
                    $this->redirect("principal/login");


            } else {

                $_SESSION["errorMessage"] = "";
                $_SESSION["loggedExterno"] = true;

                $sql2 = "SELECT nombre_completo, identificacion AS codCliente
                            FROM clientes
                            WHERE fk_codigo_usuario =  '$username'
                            LIMIT 0 , 1";

                $codUsuario = $db->queryArray($sql2);
                $_SESSION["codCliente"] = $codUsuario[0]["codCliente"];        
                $_SESSION["nombreCliente"] = $codUsuario[0]["nombre_completo"];  
                echo    $_SESSION["nombreCliente"];
                
                $this->redirect("principal/reservacion");
            } 
          
            
          }
          
      
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
      $this->validateLogin();
      
      $db = DB::Instance();
                  
      $sql = "SELECT a.codigo_vuelo as vuelo, a.codigo_asiento as asiento, 
                    b.hora_salida as salida, b.hora_llegada as llegada, 
                    b.codigo_aeropuerto_origen as origen, b.codigo_aeropuerto_destino as destino, 
                    b.duracion_estimada as duracion
                    FROM reservacion_tiquete a, vuelos b
                    WHERE identificacion_cliente =  '114520911' and
                     a.codigo_vuelo = b.codigo_vuelo
                    AND estado_tiquete !=  'A'
                    LIMIT 0 , 30";
      
      $this->reservaciones = $db->queryArray($sql);
      
      
  }
  
  public function validateLogin(){
      if(  !(isset( $_SESSION["loggedExterno"]) && $_SESSION["loggedExterno"] == true) ){
          $_SESSION["errorMessage"] = "Error de Authentication. Por favor Authenticarse.";
          $this->redirect("principal/login");
      }
  }  
  
}
