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
                        hora_salida, 
                        hora_llegada,
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
  
  public function executeEditCiudades(sfWebRequest $request)
  {
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
          
  }
  
  public function executeEditAviones(sfWebRequest $request)
  {
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $avEdit = $request->getParameter("avionEdit");
      
      $sql = "select * from aviones
              where placa = '$avEdit'   
               order by placa";
      $this->aviones = $db->queryArray($sql);
      /*
      $sql = "select * from campos_x_avion
              where placa = '$avEdit'   
               order by fila, columna";
      $this->campos = $db->queryArray($sql);*/
  }
  
  public function executeEditVuelos(sfWebRequest $request)
  {
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $vuEdit = $request->getParameter("vueloEdit");
      
      $sql = "select * from vuelos
               where codigo_vuelo = $vuEdit
              order by codigo_vuelo";
      $this->vuelos = $db->queryArray($sql);
      
      $sql = "select * from aviones   
              order by placa";
      $this->aviones = $db->queryArray($sql);
      
      $sql = "select * from aeropuertos
               order by codigo_aeropuerto";
      $this->aeropuertos = $db->queryArray($sql);
      
      $sql = "select vu.tipo_id_personal, vu.identificacion_presonal, pe.nombre_completo
                from personal_x_vuelo vu,
                     personal pe
               where vu.codigo_vuelo = '$vuEdit'
                 and vu.tipo_id_personal = pe.tipo_id_personal
                 and vu.identificacion_presonal = pe.identificacion
               order by pe.identificacion";
      //$this->personal = $db->queryArray($sql);
      echo $sql;
      /*
      $sql = "select * from campos_x_avion
              where placa = '$avEdit'   
               order by fila, columna";
      $this->campos = $db->queryArray($sql);*/
  }
  
  public function executeEditPersonalXVuelo(sfWebRequest $request)
  {
      $this->setLayout('layoutBackend');
      $db = DB::Instance();
      $tipIdentif = $request->getParameter("tipIdEdit");
      $numIdentif = $request->getParameter("numIdEdit");
      $codVuelo = $request->getParameter("codVuelo");
      $sql = "select * from personal_x_vuelo
              where tipo_identificacion = '$tipIdentif'
                and identificacion = '$numIdentif'
                and codigo_vuelo = '$codVuelo'
               order by identificacion";
      $this->personal = $db->queryArray($sql);
          
  }
  
  public function executeGuardaPaises(sfWebRequest $request)
  {
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
                    detalles = '$detallesN'
                where tipo_identificacion = '$tipoId'
                  and identificacion = '$numId'";
      }
      else 
      {
         $sql = "insert into clientes values ('$tipoId','$numId'
                ,'$fecNac','$genero','$nomComp','$dirEsp','$email'
                ,'$telPrin','$telSec','$codPais','$tipSang','$detallesN')";   
      }
//echo $sql;
      $this->clientes = $db->exec($sql);
  }
  
  public function executeGuardaAviones(sfWebRequest $request)
  {
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
  
  public function executeGuardaPersonalXVuelo(sfWebRequest $request)
  {
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
                set tipo_id_personal = '$tipoId',
                    identificacion_personal = '$idPers'
                where placa = '$vuCodigo'";
      }
      else 
      {
         $sql = "insert into personal_x_vuelo values ('$vuCodigo','$tipoId','$idPers')";   
      }
//echo $sql;
      $this->persxav = $db->exec($sql);
  }
}
