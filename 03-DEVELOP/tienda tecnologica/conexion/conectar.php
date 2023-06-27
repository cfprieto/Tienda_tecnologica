<?php
class Conexion{
               

               private $servidor = "tiendatecnologica.mysql.database.azure.com";
               private $usuario = "tiendatecnologica";
               private $clave = "Tienda*123456";
               private $db = "tienda_tecnologica";


               public function conectando() {
                   $con = mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->db) or die ("Error al conectar con el servidor");
                   return $con;
               }


}
$obj = new Conexion();
 if($obj->conectando()){
     
 }
?>

<?php
/*
    class Conexion{
        
        private static $instance;

        private static function conectar(){

            $host = 'tiendatecnologica.mysql.database.azure.com';
            $username = 'admitilo';
            $password = 'Tienda*123456';
            $db_name = 'tienda_tecnologica';
            $port = 3306;
            $ssl = "../../conexion/DigiCertGlobalRootCA.crt.pem";

            $conn = mysqli_init(); 
            mysqli_ssl_set($conn, NULL, NULL, $ssl, NULL, NULL);
            mysqli_real_connect($conn, $host, $username, $password, $db_name, $port);

            if ($conn->connect_error) {
                die('Error de Conexión (' . $conn->connect_errno . ') ' . $conn->connect_error);
            }

            return $conn;
        }

        public static function conectando(){
            if (!self::$instance) {
                self::$instance = self::conectar();
            }
            return self::$instance;
        }
    } */
?>

 