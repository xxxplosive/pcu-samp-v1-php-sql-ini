<?php
include('config.php');
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">Usuario o contraseña no válidos.</p>';
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['password'];
            echo '<p class="success">Has ingresado correctamente.</p>';
            header("HTTP/1.1 302 Moved Temporarily"); 
            header("Location: verificar.php"); 
        } else {
            echo '<p class="error">Usuario o contraseña no válidos.</p>';
        }
    }
}

class Datos_conexion {
	private $host_="40136370.servicio-online.net";
	private $usuario_="adminweb";
	private $pasword_="_q6d6oB9";
	private $Db_="9086405_bdpadmin";
	/**
	 * Devuelve el nombre de hsot
	 * @return [type] [string]
	 */
	public function host(){
		return $this->host_;
	}
	/**
	 * Devuelve el nombre de usuario
	 * @return [type] [string]
	 */
	public function usuario(){
		return $this->usuario_;
	}
	/**
	 * Devuelve la contrase�a de acceso
	 * @return [type] [string]
	 */
	public function pasword(){
		return $this->pasword_; 
	}
	/**
	 * Devuelve nombre de la base de datos
	 * @return [type] [string]
	 */
	public function DB(){
		return $this->Db_;
	}
}
