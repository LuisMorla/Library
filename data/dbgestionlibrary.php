<?php
  class DBGestionLibreria{

    private function getConnection(){

      $server = 'localhost';
      $dbname = 'dblibreria';
      $user = 'root';
      $pass = 'root';

      $dns = "mysql:host=$server;dbname=$dbname";
      
      //TryCatch

      try{
        $dbPDO = new PDO($dns, $user, $pass);
        return $dbPDO;
      }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
      }
    }

    public function getLibros(){
      $ODBConnect = $this->getConnection();
      $sql = "SELECT * FROM `libros`";
      $libros = $ODBConnect->query($sql);
      return $libros;
    }

    public function getAutores(){
      $ODBConnect = $this->getConnection();
      $sql = "SELECT * FROM `autores`";
      $autores = $ODBConnect->query($sql);
      return $autores;
    }

    public function insertarContacto($fecha, $correo, $nombre, $asunto, $comentario){
      $ODBConnect = $this->getConnection();

      // Preparar la consulta para insertar los datos en la tabla contacto
      $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) 
              VALUES (:fecha, :correo, :nombre, :asunto, :comentario)";

      try {
          // Preparar la sentencia
          $stmt = $ODBConnect->prepare($sql);

          // Asignar los valores de los parámetros
          $stmt->bindParam(':fecha', $fecha);
          $stmt->bindParam(':correo', $correo);
          $stmt->bindParam(':nombre', $nombre);
          $stmt->bindParam(':asunto', $asunto);
          $stmt->bindParam(':comentario', $comentario);

          // Ejecutar la consulta
          $stmt->execute();
          
          // Devolver true si la inserción fue exitosa
          return true;
      } catch (PDOException $e) {
          // Mostrar el mensaje de error en caso de falla
          echo "Error: " . $e->getMessage();
          // Devolver false si ocurre algún error
          return false;
      }
  }
  }
?>