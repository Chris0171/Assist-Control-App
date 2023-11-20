<?php 

class DatabaseConnection {
    private $servername; // Nombre del servidor
    private $username; // Nombre de usuario
    private $password; // Contraseña
    private $database; // Nombre de la base de datos
    private $conn; // Conexión
    
    public function __construct($servername, $username, $password, $database) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        
    }
    
    public function connect() {
        // Establecer la conexión a la base de datos
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        // Verificar si hay errores de conexión
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }
    public function query($consulta){
        // Ejecutar la consulta
        $result = $this->conn->query($consulta);
        
        // Verificar si ocurrió un error en la consulta
        if (!$result) {
            die("Error en la consulta: " . $this->conn->error);
        }
        
        // Retornar el resultado de la consulta
        return $result;
    }
    public function close() {
        // Cerrar la conexión a la base de datos
        $this->conn->close();
    }
    
}

?>
