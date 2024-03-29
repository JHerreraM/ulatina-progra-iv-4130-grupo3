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
  public function validateLogin(){
      if(  !(isset( $_SESSION["loggedInterno"]) && $_SESSION["loggedInterno"] == true) ){
          $_SESSION["errorMessage"] = "Error de Authentication. Por favor Authenticarse.";
          $this->redirect("backend/auth");
      }
  }  
    
  public function executeSample(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');    
  }
  
  public function executeIndex(sfWebRequest $request)
  {
          $this->validateLogin();
          $this->setLayout('layoutBackend');
          
  }
  
  public function executeAuth(sfWebRequest $request)
  {
          $this->setLayout('layoutBackend');

          if( $request->getParameter("login") == "true"){

            $db = DB::Instance();

            $username = $request->getParameter("username");
            $password = $request->getParameter("password");

            $sql = "select count(*) As login from usuarios where codigo_usuario = '$username' AND password = '$password' AND tipo_usuario = 'I';";

            $login = $db->queryArray($sql);

            print_r ($login);

            if($login[0]["login"] != 1){

                    $_SESSION["errorMessage"] = "Usuario o Password Invalido";
                    $this->redirect("backend/auth");


            } else {

                $_SESSION["errorMessage"] = "";
                $_SESSION["loggedInterno"] = true;

                $this->redirect("backend/paises");
            } 
          
            
          }
          
          
          
  }
  
  public function executeLogout(sfWebRequest $request){
      
         $_SESSION["loggedInterno"] = false;
         unset( $_SESSION["loggedInterno"]  );
         $this->redirect("backend/auth");
         
  }
  
  public function executePersonal(sfWebRequest $request)
  {
      $this->validateLogin();  
      $this->setLayout('layoutBackend');
          
  }
  
  public function executeClientes(sfWebRequest $request)
  {
        $this->validateLogin();    
        $this->setLayout('layoutBackend');
          
  }
  
  public function executePaises(sfWebRequest $request)
  {
          $this->validateLogin();
          $this->setLayout('layoutBackend');
          
  }
  
  public function executeCiudades(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
  }
  
  public function executeAeropuertos(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
  }
  
  public function executeAviones(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
  }
  
  public function executeVuelos(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
  }
  
  public function executeNoticias(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
  }
  
  public function executeReservar(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
  }
  
  public function executePrecios(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
  }
  
  public function executeEditPrecios(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          $db = DB::Instance();
          
          $vuelo = $request->getParameter("codVuelo");
          $tipAsie = $request->getParameter("tipoAsiento");
          
          $sql = "select * from vuelos where hora_salida > now()";
          //echo $sql;
          $this->vuelos = $db->queryArray($sql);
          
          $sql = "select * 
                    from costo_x_tipo_campo
                   where codigo_vuelo = '$vuelo'
                     and tipo_campo = '$tipAsie'";
          //echo $sql;
          $this->precios = $db->queryArray($sql);
  }
  
  public function executeListPrecios(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          $db = DB::Instance();
          $accionSel = $request->getParameter("accionSelec");
          $cantReg = $request->getParameter("cantReg");
          $vuelo = $request->getParameter("codVuelo");
          $tipAsie = $request->getParameter("tipoAsiento");
          $costo = $request->getParameter("costAsiento");
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');

                if ($accionSel == '4')
                {    
                      $sql = "delete from costo_x_tipo_campo
                               where codigo_vuelo = '$vuelo'
                                 and tipo_campo = '$tipAsie'";
                      $this->clteBor = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente el costo del asiento ".$tipAsie." en el vuelo ".$vuelo;
                }
            }
            else
            {
              IF (isset($tipAsie) && isset($vuelo))
               {   
                IF ($cantReg == 1)
                {
                  $sql = "update costo_x_tipo_campo
                          set costo = '$costo'
                          where codigo_vuelo = '$vuelo'
                            and tipo_campo = '$tipAsie'";
                  $this->mensajeCorr = "Se actualizo correctamente el costo del asiento ".$tipAsie." en el vuelo ".$vuelo;
                }
                else 
                {
                   $sql = "insert into costo_x_tipo_campo values ('$vuelo','$tipAsie','$costo')"; 
                   $this->mensajeCorr = "Se grabo correctamente el costo del asiento ".$tipAsie." en el vuelo ".$vuelo;
                }
               }
                
            }    
     // echo $sql;
            $this->costos = $db->exec($sql);
            
          $sql = "select * from costo_x_tipo_campo order by codigo_vuelo desc, tipo_campo desc";
          //echo $sql;
          $this->precios = $db->queryArray($sql);
          
  }
  
  public function executeListPersonal(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          
          $accionSel = $request->getParameter("accionSelec");
                      
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');
                $tipIdE = $request->getParameter("tipIdEdit");
                $idE = $request->getParameter("numIdEdit");

                if ($accionSel == '4')
                {    
                      $sql = "delete from personal
                               where tipo_identificacion = '$tipIdE'
                                 and identificacion = '$idE'";
                      $this->clteBor = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente el empleado ".$idE;
                }
            }
            
          $sql = "select * from personal";
          
          $this->personal = $db->queryArray($sql);
          
  }
  
  public function executeListClientes(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          
          $accionSel = $request->getParameter("accionSelec");
                      
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');
                $tipIdE = $request->getParameter("tipIdEdit");
                $idE = $request->getParameter("numIdEdit");

                if ($accionSel == '4')
                {    
                      $sql = "delete from clientes
                               where tipo_identificacion = '$tipIdE'
                                 and identificacion = '$idE'";
                      $this->clteBor = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente el cliente ".$idE;
                }
            }
            
          $sql = "select * from clientes";
          
          $this->personal = $db->queryArray($sql);
          
  }
  
  public function executeListPaises(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          
          $accionSel = $request->getParameter("accionSelec");
                      
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');
                $paisE = $request->getParameter("paisEdit");

                if ($accionSel == '4')
                {    
                      $sql = "delete from paises
                               where codigo_pais = '$paisE'";
                      $this->paisBor = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente el pais ".$paisE;
                }
            }
            
          $sql = "select * from paises order by codigo_pais";
          
          $this->paises = $db->queryArray($sql);
          
  }
  
  public function executeListCiudades(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          
          $accionSel = $request->getParameter("accionSelec");
                      
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');
                $paisE = $request->getParameter("paisEdit");
                $ciudadE = $request->getParameter("ciudadEdit");

                if ($accionSel == '4')
                {    
                      $sql = "delete from ciudades
                               where codigo_pais = '$paisE'
                                 and codigo_ciudad = '$ciudadE'";
                      $this->ciudadBor = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente la ciudad ".$ciudadE;
                }
            }
            
          $sql = "select * from ciudades order by codigo_pais, codigo_ciudad";
          
          $this->ciudades = $db->queryArray($sql);
          
  }
  
  public function executeListAeropuertos(sfWebRequest $request)
  {
      $this->validateLogin();      
      $this->setLayout('layoutBackend');
            $db = DB::Instance();
            
            $accionSel = $request->getParameter("accionSelec");
                      
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');
                $paisE = $request->getParameter("paisEdit");
                $ciudadE = $request->getParameter("ciudadEdit");
                $aeroE = $request->getParameter("aeroEdit");

                if ($accionSel == '4')
                {    
                      $sql = "delete from aeropuertos
                               where codigo_aeropuerto = '$aeroE'
                                 and codigo_pais = '$paisE'
                                 and codigo_ciudad = '$ciudadE'";
                      $this->aeroBor = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente el aeropuerto ".$aeroE;
                }
            }
            
          $sql = "select * from aeropuertos order by codigo_pais, codigo_ciudad, codigo_aeropuerto";
          
          $this->aeropuertos = $db->queryArray($sql);
          
  }
  
  public function executeListAviones(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          
          $accionSel = $request->getParameter("accionSelec");
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');
                $avionE = $request->getParameter("avionEdit");

                if ($accionSel == '4')
                {    
                      $sql = "delete from aviones
                               where placa = '$avionE'";
                      $this->avionBor = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente el avion ".$avionE;
                }
            }
            
          $sql = "select * from aviones";
          
          $this->aviones = $db->queryArray($sql);
          
  }
  
  public function executeListVuelos(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          
          $accionSel = $request->getParameter("accionSelec");
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');
                $vuCodigo = $request->getParameter("vueloEdit");

                if ($accionSel == '4')
                {    
                      $sql = "delete from vuelos
                               where codigo_vuelo = '$vuCodigo'";
                      $this->vueloBor = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente el vuelo ".$vuCodigo;
                }
            }
            
          $sql = "select codigo_vuelo as codigo,  
                        codigo_aeropuerto_origen as nombreOrigen, 
                        codigo_aeropuerto_destino as nombreDestino,  
                        hora_salida, 
                        hora_llegada,
                        duracion_estimada,
                        placa_avion from vuelos
                        order by codigo_vuelo desc";

          $this->vuelos = $db->queryArray($sql);
  }
  
   public function executeListNoticias(sfWebRequest $request)
  {
       $this->validateLogin();   
       $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          
          $accionSel = $request->getParameter("accionSelec");
                      
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');
                $notiId = $request->getParameter("noticiaId");

                if ($accionSel == '4')
                {    
                      $sql = "delete from noticias
                               where pkid = '$notiId'";
                      $this->notiBor = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente la noticia ".$notiId;
                }
            }
            
          $sql = "select * from noticias order by fecha desc, pkid desc";
          
          $this->noticias = $db->queryArray($sql);
          
  }
  
  public function executeListReservas(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          //echo "KKKEIEIEIEIE";
          $cantReg  = $request->getParameter("cantReg");
          //echo $cantReg;
          
          $accionSel = $request->getParameter("accionSelec");
          $asiento = $request->getParameter("codAsiento");
          $vuelo = $request->getParameter("codVuelo");
          $idClien = $request->getParameter("idenClte");
          $formaPago = $request->getParameter("reFormaP");
          $reEstado = $request->getParameter("reserEstado");
          $rePrecio = $request->getParameter("reserPrecio");
          
          //$reSecVal = $request->getParameter("noticiaId");
          
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');
                if ($accionSel == '4')
                {    
                      $sql = "delete from reservacion_tiquete
                               where codigo_vuelo = '$vuelo'
                                 and codigo_asiento = '$asiento'";
                      $this->resBor = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente la reserva del asiento ".$asiento;
                }
                
            }
            else {
                if ($cantReg == '1')
                {    
                      $sql = "update reservacion_tiquete 
                                 set identificacion_cliente = '$idClien',
                                     precio_tiquete = (select co.costo 
                                                         from costo_x_tipo_campo co,
                                                              campos_x_avion ca,
                                                              vuelos vu
                                                        where co.codigo_vuelo ='$vuelo'
                                                          and vu.codigo_vuelo = '$vuelo'
                                                          and ca.placa_avion = vu.placa_avion
                                                          and co.tipo_campo = ca.tipo_campo
                                                          and ca.codigo_campo = '$asiento'),
                                     estado_tiquete = '$reEstado',
                                     forma_pago = '$formaPago'
                               where codigo_vuelo = '$vuelo'
                                 and codigo_asiento = '$asiento'";
                      //echo $sql;
                      $this->resInser = $db->exec($sql);
                      $this->mensajeCorr = "Se grabo correctamente la reserva del asiento ".$asiento;
                }
                else
                {   if (isset($asiento))
                     {
                       $sql = "insert into reservacion_tiquete values (null,

                               '$asiento','$vuelo','C','$idClien',(select co.costo 
                                                                    from costo_x_tipo_campo co,
                                                                         campos_x_avion ca,
                                                                         vuelos vu
                                                                   where co.codigo_vuelo ='$vuelo'
                                                                     and vu.codigo_vuelo = '$vuelo'
                                                                     and ca.placa_avion = vu.placa_avion
                                                                     and co.tipo_campo = ca.tipo_campo
                                                                     and ca.codigo_campo = '$asiento'),
                                            '$formaPago','$reEstado','')";
                       //echo $sql;
                       $this->resInser = $db->exec($sql);
                       $this->mensajeCorr = "Se grabo correctamente la reserva del asiento ".$asiento;
                     }
                }
            }
          $sql = "select re.codigo_vuelo, re.codigo_asiento, re.tipo_id_cliente, 
                         re.identificacion_cliente, re.precio_tiquete,
                         re.forma_pago, re.estado_tiquete, re.secuencia_validacion_vuelo,
                         cl.nombre_completo
                  from reservacion_tiquete re,
                       clientes cl      
                 where re.tipo_id_cliente = cl.tipo_identificacion
                   and re.identificacion_cliente = cl.identificacion
                   and re.codigo_vuelo = '$vuelo'
                 order by re.codigo_asiento";
          //echo $sql;
          $this->reservas = $db->queryArray($sql);
          $this->vueloRes = $vuelo;
          
  }
  
  public function executeEditPaises(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $sql = "select * from paises
              where codigo_pais = '".$_GET["paisEdit"]."'
               order by codigo_pais";
      $this->paises = $db->queryArray($sql);
  }
  
  public function executeEditCiudades(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $codPais = $request->getParameter("paisEdit");
      $codCiudad = $request->getParameter("ciudadEdit");
      
      $sql = "select * from ciudades
              where codigo_pais = '$codPais'
                and codigo_ciudad = '$codCiudad'
               order by codigo_pais, codigo_ciudad";
      $this->ciudades = $db->queryArray($sql);
      
      $sql = "select * from paises order by codigo_pais";
          
      $this->paises = $db->queryArray($sql);
          
  }
  
  public function executeEditAeropuertos(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $codPais = $request->getParameter("paisEdit");
      $codCiudad = $request->getParameter("ciudadEdit");
      $codAero = $request->getParameter("aeroEdit");
      
      $sql = "select * from aeropuertos
              where codigo_pais = '$codPais'
                and codigo_ciudad = '$codCiudad'
                and codigo_aeropuerto = '$codAero'    
               order by codigo_pais, codigo_ciudad, codigo_aeropuerto";
      $this->aeropuertos = $db->queryArray($sql);
      
      $sql = "select * from ciudades
               order by codigo_pais, codigo_ciudad";
      $this->ciudades = $db->queryArray($sql);
      
      $sql = "select * from paises order by codigo_pais";
          
      $this->paises = $db->queryArray($sql);
          
  }
  
  public function executeEditPersonal(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $tipIdentif = $request->getParameter("tipIdEdit");
      $numIdentif = $request->getParameter("numIdEdit");
      
      $sql = "select * from personal
              where tipo_identificacion = '$tipIdentif'
                and identificacion = '$numIdentif'   
               order by identificacion";
      $this->personal = $db->queryArray($sql);
      
      $sql = "select * from paises order by codigo_pais";
          
      $this->paises = $db->queryArray($sql);
          
  }
  
  public function executeEditClientes(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      
      $db = DB::Instance();
      $tipIdentif = $request->getParameter("tipIdEdit");
      $numIdentif = $request->getParameter("numIdEdit");
      
      $sql = "select * from clientes
              where tipo_identificacion = '$tipIdentif'
                and identificacion = '$numIdentif'   
               order by identificacion";
      $this->clientes = $db->queryArray($sql);
      
      $sql = "select * from paises order by codigo_pais";
          
      $this->paises = $db->queryArray($sql);
      
      $sql = "select * from usuarios order by codigo_usuario";
          
      $this->usuarios = $db->queryArray($sql);    
  }
  
  public function executeEditAviones(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $avEdit = $request->getParameter("avionEdit");
      $campo = $request->getParameter("caCampo");
      $fila = $request->getParameter("caFila");
      $columna = $request->getParameter("caColumna");
      $tipCam = $request->getParameter("caTipoCam");
      $accionSel = $request->getParameter("accCampos");
      $cantReg = $request->getParameter("cantRegCa");
      
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');

                if ($accionSel == '1')
                {    
                    if ($cantReg == 0)
                    {
                      $sql = "insert into campos_x_avion
                              values ('$avEdit','$campo','$tipCam',$columna,$fila)";
                      $this->campoAg = $db->exec($sql);
                      $this->mensajeCorr = "Se agrego correctamente el campo ".$campo;
                    }
                    if ($cantReg == 1)
                    {
                      $sql = "update campos_x_avion
                                 set tipo_campo = '$tipCam',
                                     fila = '$fila',
                                     columna = '$columna'
                               where placa_avion = '$avEdit'
                                 and codigo_campo = '$campo'";
                      $this->campoAg = $db->exec($sql);
                      $this->mensajeCorr = "Se actualizo correctamente el campo ".$campo;
                    }  
                }
                if ($accionSel == '4')
                {    
                    
                      $sql = "delete from campos_x_avion
                               where placa_avion = '$avEdit'
                                 and codigo_campo = '$campo'";
                      $this->campoAg = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente el campo ".$campo;
                      
                }
            }
            
      $sql = "select * from aviones
              where placa = '$avEdit'   
               order by placa";
      $this->aviones = $db->queryArray($sql);
      
      $sql = "select * from campos_x_avion
              where placa_avion = '$avEdit'   
               order by fila, columna";
      $this->campos = $db->queryArray($sql);
  }
  
  public function executeEditCampos(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      
      $avEdit = $request->getParameter("avionEdit");
      $caEdit = $request->getParameter("campoEdit");
      
      $sql = "select * from campos_x_avion
              where placa_avion = '$avEdit'
                and codigo_campo = '$caEdit'
               order by fila, columna";
      
      $this->caPlacaAvion = $avEdit; 
      $this->campos = $db->queryArray($sql);
  }
  
  public function executeEditVuelos(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      
      //Variable para definir si se debe insertar o actualizar
      $cantReg = $request->getParameter("cantReg");
      
      //Se seleccional los valores de los campos del vuelo
      $vuelo = $request->getParameter("vueloEdit");
      //echo $vuelo;
      $aeOr = $request->getParameter("aeroOrig");
      $aeDs = $request->getParameter("aeroDest");
      $avPlaca = $request->getParameter("placaAvion");
      //$hrSalida = $request->getParameter("horSalida");
      $hrSalida = date("Y-m-d H:i", strtotime($request->getParameter("horSalida")));
      //$hrLLegada = $request->getParameter("horLLegada");
      $hrLLegada = date("Y-m-d H:i", strtotime($request->getParameter("horLLegada")));
      $durEst = $request->getParameter("durEstimada");
      UNSET($this->mensajeCorr);
      //Si existe un registro lo actualiza
      IF ($cantReg == 1)
      {
        $sql = "update vuelos
                set codigo_aeropuerto_origen = '$aeOr',
                    codigo_aeropuerto_destino = '$aeDs',
                    placa_avion = '$avPlaca',
                    hora_salida = '$hrSalida',
                    hora_llegada = '$hrLLegada',
                    duracion_estimada = $durEst
                where codigo_vuelo = $vuelo";
        $this->mensajeCorr = "Se actualizo correctamente el vuelo ".$vuelo;
      }
      //de lo contrario lo inserta
      else 
      {
         if (isset($avPlaca))
         {
         $sql = "insert into vuelos values (null,'$aeOr'
                ,'$aeDs','$avPlaca','$hrSalida','$hrLLegada'
                ,$durEst)";
         $this->mensajeCorr = "Se agrego correctamente el vuelo ";
         }  
      }
        //echo $sql;
      $this->vuelos = $db->exec($sql);
      
      $accionSelAsg = $request->getParameter("accionSelecAsg");
      //echo $accionSelAsg;
      if (isset($accionSelAsg))
      {
          //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');
          $vuCodigo = $request->getParameter("vueloEdit");
          $tipoId = $request->getParameter("tipIdEdit");
          $idPers = $request->getParameter("numIdEdit");
          
          if ($accionSelAsg == '4')
          {    
            
                $sql = "delete from personal_x_vuelo  
                         where codigo_vuelo = '$vuCodigo'
                           and tipo_id_presonal = '$tipoId'
                           and identificacion_personal = '$idPers'";
                $this->persxav = $db->exec($sql);
            
          }
      }
            //echo $sql;
      
      
      $accionSelDisp = $request->getParameter("accionSelecDisp");
      
      if (isset($accionSelDisp))
      {
          $arrPerAgrega = $request->getParameter("perAgregar[]");
          $vuCodigo = $request->getParameter("vueloEdit");
          $tipoId = $request->getParameter("tipIdEdit");
          $idPers = $request->getParameter("numIdEdit");
          
          if ($accionSelDisp == '1')
          {
            //echo $cantPais;
            $sql = "insert into personal_x_vuelo values ('$vuCodigo','$tipoId','$idPers')";  
            $this->persxav = $db->exec($sql);
            
          }
          
      }
      
      
      //$this->setLayout('layoutBackend');
      //$db = DB::Instance();
      $vuEdit = $request->getParameter("vueloEdit");
      if (isset($vuEdit))
      {
      $sql = "select * from vuelos
               where codigo_vuelo = $vuEdit
              order by codigo_vuelo";
      $this->vuelos = $db->queryArray($sql);
      }
      
      $sql = "select * from aviones   
              order by placa";
      $this->aviones = $db->queryArray($sql);
      
      $sql = "select * from aeropuertos
               order by codigo_aeropuerto";
      $this->aeropuertos = $db->queryArray($sql);
      
      $sql = "select pe.tipo_identificacion, pe.identificacion, pe.nombre_completo
                from personal_x_vuelo vu,
                     personal pe
               where vu.codigo_vuelo = '$vuEdit'
                 and vu.tipo_id_presonal = pe.tipo_identificacion
                 and vu.identificacion_personal = pe.identificacion
               order by pe.identificacion";
      $this->personal = $db->queryArray($sql);
      
      $sql = "select pe.tipo_identificacion, pe.identificacion, pe.nombre_completo
                from personal pe
               where pe.identificacion not in (select vu.identificacion_personal 
                                                 from personal_x_vuelo vu 
                                                where vu.codigo_vuelo = '$vuEdit')
               order by pe.identificacion";
      $this->personaldisp = $db->queryArray($sql);
      
      //echo $sql;
      $this->varCodVuel = $vuEdit;
  }
  
  public function executeEditReservas(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $vuelo = $request->getParameter("codVuelo");
      $asiento = $request->getParameter("codAsiento");
      
      $sql = "select * from reservacion_tiquete
              where codigo_vuelo = '$vuelo'
                and codigo_asiento = '$asiento'
               order by codigo_asiento";
//      echo $sql;      
      $this->reservas = $db->queryArray($sql);
      
      $sql = "select * from clientes order by identificacion";
      $this->clientelist = $db->queryArray($sql); 
      
      $sql = "select ca.codigo_campo, co.costo 
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
                      or ca.codigo_campo = '$asiento')
               order by ca.codigo_campo";
      //echo $sql;      
      $this->asientos = $db->queryArray($sql);
      
      $sql = "select ca.codigo_campo, co.costo  
                from campos_x_avion ca,
                     vuelos vu,
                     costo_x_tipo_campo co
               where ca.tipo_campo != 'P'
                 and vu.codigo_vuelo = '$vuelo'
                 and ca.placa_avion = vu.placa_avion
                 and ca.tipo_campo = co.tipo_campo
                 and vu.codigo_vuelo = co.codigo_vuelo
                 and ca.codigo_campo not in (select rs.codigo_asiento
                                               from reservacion_tiquete rs
                                              where rs.codigo_vuelo = vu.codigo_vuelo
                                                and rs.estado_tiquete = 'V')
               order by ca.codigo_campo";
      //  echo $sql;      
      $this->asientosDisp = $db->queryArray($sql);
      
      $this->varCodVuel = $vuelo;
      $this->vartipId = "C";
  }
  
  
  
  public function executeEditNoticias(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      
      $notiId = $request->getParameter("noticiaId");
      $sql = "select * from noticias
              where pkid = '$notiId'
               order by pkid";
      $this->noticias = $db->queryArray($sql);
  }
  
  public function executeGuardaPaises(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      
      $cantPais = $request->getParameter("cantPais");
      
      $codPaisN = $request->getParameter("codPaisNuevo");
      $codPaisA = $request->getParameter("codPaisAnterior");
      $nomPais = $request->getParameter("nomPaisNuevo");
      $nacionalidad = $request->getParameter("nacPais");
      
      $db = DB::Instance();
      echo $cantPais;
      IF ($cantPais == 1)
      {
        $sql = "update paises
                set nombre_pais = '$nomPais',
                    nacionalidad = '$nacionalidad'
                where codigo_pais = '$codPaisA'";
      }
      else 
      {
         $sql = "insert into paises values ('$codPaisN','$nomPais','$nacionalidad')";   
      }
//echo $sql;
      $this->paises = $db->exec($sql);
  }
  
  public function executeGuardaCiudades(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      
      $cantReg = $request->getParameter("cantReg");
      
      $codPaisN = $request->getParameter("codPaisAnt");
      $codCiudadN = $request->getParameter("codCiudadAnt");
      $nomCiudadN = $request->getParameter("nomCiudadNuevo");
      
      $db = DB::Instance();
      //echo $cantPais;
      IF ($cantReg == 1)
      {
        $sql = "update ciudades
                set nombre_ciudad = '$nomCiudadN'
                where codigo_pais = '$codPaisN'
                  and codigo_ciudad = '$codCiudadN'";
      }
      else 
      {
         $sql = "insert into ciudades values ('$codCiudadN','$codPaisN','$nomCiudadN')";   
      }
//echo $sql;
      $this->ciudades = $db->exec($sql);
  }
  
  public function executeGuardaAeropuertos(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      
      $cantReg = $request->getParameter("cantReg");
      
      $codPaisN = $request->getParameter("codPaisAnt");
      $codCiudadN = $request->getParameter("codCiudadAnt");
      $codAeroN = $request->getParameter("codAeroAnt");
      $nomAeroN = $request->getParameter("nomAeroNuevo");
      $detallesN = $request->getParameter("DetallesNuevo");
      $db = DB::Instance();
      //echo $cantPais;
      IF ($cantReg == 1)
      {
        $sql = "update aeropuertos
                set nombre_aeropuerto = '$nomAeroN',
                    detalles = '$detallesN'
                where codigo_pais = '$codPaisN'
                  and codigo_ciudad = '$codCiudadN'
                  and codigo_aeropuerto = '$codAeroN'";
      }
      else 
      {
         $sql = "insert into aeropuertos values ('$codAeroN','$codCiudadN','$codPaisN','$nomAeroN','$detallesN')";   
      }
//echo $sql;
      $this->aeropuertos = $db->exec($sql);
  }
  
  public function executeGuardaPersonal(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      
      $cantReg = $request->getParameter("cantReg");
      
      $tipoId = $request->getParameter("tipoIdentif");
      $numId = $request->getParameter("numIdentif");
      $nomComp = $request->getParameter("nomCompleto");
      $fecNac = $request->getParameter("fecNacimiento");
      $genero = $request->getParameter("tipoGenero");
      $email = $request->getParameter("eMail");
      $telPrin = $request->getParameter("telPrincipal");
      $telSec = $request->getParameter("telSecundario");
      $tipSang = $request->getParameter("tipoSangre");
      $horVuelo = $request->getParameter("horasVuelo");
      $dirEsp = $request->getParameter("direcEsp");
      $detallesN = $request->getParameter("DetallesNuevo");
      $codPais = $request->getParameter("codPais");
      
      $db = DB::Instance();
      //echo $cantPais;
      IF ($cantReg == 1)
      {
        $sql = "update personal
                set nombre_completo = '$nomComp',
                    fecha_nacimiento = '$fecNac',
                    genero = '$genero',
                    email = '$email',
                    tel_principal = '$telPrin',
                    tel_secundario = '$telSec',
                    tipo_sangre = '$tipSang',
                    horas_vuelo = '$horVuelo',
                    direccion = '$dirEsp',
                    codigo_pais = '$codPais',
                    detalles = '$detallesN'
                where tipo_identificacion = '$tipoId'
                  and identificacion = '$numId'";
      }
      else 
      {
         $sql = "insert into personal values ('$tipoId','$numId'
                ,'$fecNac','$genero','$nomComp','$dirEsp','$email'
                ,'$telPrin','$telSec','$codPais','$tipSang','$horVuelo','$detallesN')";   
      }
//echo $sql;
      $this->personal = $db->exec($sql);
  }
  
  public function executeGuardaClientes(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      
      $cantReg = $request->getParameter("cantReg");
      
      $tipoId = $request->getParameter("tipoIdentif");
      $numId = $request->getParameter("numIdentif");
      $nomComp = $request->getParameter("nomCompleto");
      $fecNac = $request->getParameter("fecNacimiento");
      $genero = $request->getParameter("tipoGenero");
      $email = $request->getParameter("eMail");
      $telPrin = $request->getParameter("telPrincipal");
      $telSec = $request->getParameter("telSecundario");
      $tipSang = $request->getParameter("tipoSangre");
      $dirEsp = $request->getParameter("direcEsp");
      $usuarioClte = $request->getParameter("codUsr");
      $detallesN = $request->getParameter("DetallesNuevo");
      $codPais = $request->getParameter("codPais");
      
      $db = DB::Instance();
      //echo $cantPais;
      IF ($cantReg == 1)
      {
        $sql = "update clientes
                set nombre_completo = '$nomComp',
                    fecha_nacimiento = '$fecNac',
                    genero = '$genero',
                    email = '$email',
                    tel_principal = '$telPrin',
                    tel_secundario = '$telSec',
                    tipo_sangre = '$tipSang',
                    direccion = '$dirEsp',
                    codigo_pais = '$codPais',
                    detalles = '$detallesN',
                    fk_codigo_usuario = '$usuarioClte'
                where tipo_identificacion = '$tipoId'
                  and identificacion = '$numId'";
      }
      else 
      {
         $sql = "insert into clientes values ('$tipoId','$numId','$usuarioClte'
                ,'$fecNac','$genero','$nomComp','$dirEsp','$email'
                ,'$telPrin','$telSec','$codPais','$tipSang','$detallesN')";   
      }
//echo $sql;
      $this->clientes = $db->exec($sql);
  }
  
  public function executeGuardaAviones(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      
      $cantReg = $request->getParameter("cantReg");
      
      $avPlaca = $request->getParameter("avPlaca");
      $avMarca = $request->getParameter("avMarca");
      $avModelo = $request->getParameter("avModelo");
      $avCantPas = $request->getParameter("cantPas");
      $avEstado = $request->getParameter("avEstado");
      $avDist = $request->getParameter("distRecorr");
      $detallesN = $request->getParameter("DetallesNuevo");
      
      $db = DB::Instance();
      //echo $cantPais;
      IF ($cantReg == 1)
      {
        $sql = "update aviones
                set marca = '$avMarca',
                    modelo = '$avModelo',
                    cantidad_pasajeros = '$avCantPas',
                    estado = '$avEstado',
                    distancia_recorrida = '$avDist',
                    detalles = '$detallesN'
                where placa = '$avPlaca'";
      }
      else 
      {
         $sql = "insert into aviones values ('$avPlaca','$avMarca'
                ,$avModelo,$avCantPas,'$avEstado',$avDist
                ,'$detallesN')";   
      }
//echo $sql;
      $this->aviones = $db->exec($sql);
  }
  
  public function executeGuardaVuelos(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      
      $cantReg = $request->getParameter("cantReg");
      
      $vuelo = $request->getParameter("codVuelo");
      $aeOr = $request->getParameter("aeroOrig");
      $aeDs = $request->getParameter("aeroDest");
      $avPlaca = $request->getParameter("placaAvion");
      //$hrSalida = $request->getParameter("horSalida");
      $hrSalida = date("Y-m-d H:i", strtotime($request->getParameter("horSalida")));
      //$hrLLegada = $request->getParameter("horLLegada");
      $hrLLegada = date("Y-m-d H:i", strtotime($request->getParameter("horLLegada")));
      $durEst = $request->getParameter("durEstimada");
      
      $db = DB::Instance();
      //echo $cantPais;
      IF ($cantReg == 1)
      {
        $sql = "update vuelos
                set codigo_aeropuerto_origen = '$aeOr',
                    codigo_aeropuerto_destino = '$aeDs',
                    placa_avion = '$avPlaca',
                    hora_salida = '$hrSalida',
                    hora_llegada = '$hrLLegada',
                    duracion_estimada = $durEst
                where codigo_vuelo = $vuelo";
      }
      else 
      {
         $sql = "insert into vuelos values (null,'$aeOr'
                ,'$aeDs','$avPlaca','$hrSalida','$hrLLegada'
                ,$durEst)";   
      }
echo $sql;
      $this->vuelos = $db->exec($sql);
  }
  
  public function executeGuardaPersonalXVuelo(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      
      $cantReg = $request->getParameter("cantReg");
      
      $vuCodigo = $request->getParameter("codVuelo");
      $tipoId = $request->getParameter("tipoId");
      $idPers = $request->getParameter("idPersonal");
      
      $db = DB::Instance();
      //echo $cantPais;
      IF ($cantReg == 1)
      {
        $sql = "update personal_x_vuelo
                set identificacion_personal = '$idPers'
                where codigo_vuelo = '$vuCodigo'";
      }
      else 
      {
         $sql = "insert into personal_x_vuelo values ('$vuCodigo','$tipoId','$idPers')";   
      }
//echo $sql;
      $this->persxav = $db->exec($sql);
  }
  
  public function executeBorraPerXVuelo(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      
      $cantReg = $request->getParameter("cantReg");
      
      $vuCodigo = $request->getParameter("codVuelo");
      $tipoId = $request->getParameter("tipoId");
      $idPers = $request->getParameter("idPersonal");
      
      $db = DB::Instance();
      //echo $cantPais;
      $sql = "delete personal_x_vuelo
                set  tipo_id_presonal = '$tipoId'
                     identificacion_personal = '$idPers'
               where codigo_vuelo = '$vuCodigo'";
      
//echo $sql;
      $this->persxav = $db->exec($sql);
  }
  
  public function executeListUsuarios(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
          $db = DB::Instance();
          
          $accionSel = $request->getParameter("accionSelec");
          
          $cantR = $request->getParameter("cantReg");
          $usuario = $request->getParameter("editUsuario");
          $password = $request->getParameter("usPassw");
          $tipoUsr = $request->getParameter("usTipo");
            //echo $accionSelAsg;
            if (isset($accionSel))
            {
                //Preguntar RT $arrPerBorra[] = $request->getParameter('perBorrar');
                
                if ($accionSel == '4')
                {    
                      $sql = "delete from usuarios
                               where codigo_usuario = '$usuario'";
                      $this->notiBor = $db->exec($sql);
                      $this->mensajeCorr = "Se elimino correctamente el usuario ".$usuario;
                }
            }
            else
            { 
              IF (isset($usuario))    
              {  
                IF ($cantR == 1)
                {
                $sql = "update usuarios
                        set password = '$password',
                            tipo_usuario = '$tipoUsr'
                        where codigo_usuario = '$usuario'";
                $this->mensajeCorr = "Se actualizo correctamente el usuario ".$usuario;
                }
                else 
                {
                 $sql = "insert into usuarios values ('$usuario','$password','$tipoUsr')";   
                 $this->mensajeCorr = "Se grabo correctamente el usuario ".$usuario;
                }
            
                //echo $sql;
                $this->users = $db->exec($sql);
            
                }
            }
            
            
          $sql = "select * from usuarios order by codigo_usuario";
          //echo $sql;
          $this->usuarios = $db->queryArray($sql);
          
  }
  
  public function executeEditUsuarios(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $usuario = $request->getParameter("usuarioEdit");
      
      $sql = "select * from usuarios where codigo_usuario = '$usuario'";
      $this->usuarios = $db->queryArray($sql);
                
  }
  
  public function executeGuardaNoticias(sfWebRequest $request)
  {
      $this->validateLogin();
      $this->setLayout('layoutBackend');
      
      $cantR = $request->getParameter("cantReg");
      
      $fecNot = $request->getParameter("noFecha");
      $idNot = $request->getParameter("noticiaId");
      $titNot = $request->getParameter("noTitulo");
      $contNot = $request->getParameter("noContenido");
      
      $db = DB::Instance();
      //echo $cantR;
      IF ($cantR == 1)
      {
        $sql = "update noticias
                set fecha = '$fecNot',
                    titulo = '$titNot',
                    contenido = '$contNot'
                where pkid = '$idNot'";
      }
      else 
      {
         $sql = "insert into noticias values ('$idNot','$titNot','$fecNot','$contNot')";   
      }
//echo $sql;
      $this->noticias = $db->exec($sql);
  }

  public function executeUsuarios(sfWebRequest $request)
  {
      $this->validateLogin();    
      $this->setLayout('layoutBackend');
          
  }
  
  
}
